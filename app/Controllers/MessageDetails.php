<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MessagesModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LoginDetails;
use App\Models\MinutesIdleView;

class MessageDetails extends BaseController
{
    public function send()
    {
        $senderId = $this->request->getPost('senderId');
        $receiverId = $this->request->getPost('receiverId');
        $message = $this->request->getPost('message');

        echo $message;

        $messageModel = new MessagesModel();
        $values = [
            'sender' => $senderId,
            'receiver' => $receiverId,
            'message' => $message
        ];
        $query = $messageModel->insert($values); // Fixed: insert() expects array
        if(!$query){
            echo 'Fail';
        } else {
            echo 'Success';
        }
    }

    public function fetch()
    {
        $sender = $this->request->getPost('senderId');
        $receiver = $this->request->getPost('receiverId');

        // echo 'Sender Id: ' . $sender;
        // echo 'Receiver Id: ' . $receiver;

        $messagesModel = new MessagesModel();
        $message_log = $messagesModel->groupStart()
        ->where('receiver', $receiver)
        ->where('sender', $sender)
        ->groupEnd()
        ->orGroupStart()
        ->where('receiver', $sender)
        ->where('sender', $receiver)
        ->groupEnd()->orderBy('messages_id', 'Asc')->findAll();

        $login_details = new LoginDetails();
        $friend_id = $this->request->getPost('friend_id');

        $user_log = $login_details->where('user_admin_id', $receiver)->first();

        $message_details = [
            'message_log' => $message_log,
            'user_log' => $user_log
        ];

        if($message_log OR $user_log){
            return $this->response->setJSON($message_details);
        } else {
            return $this->response->setStatusCode(400);//????????
        }
        
    }

    public function updateTime(){

        // $users = array_column($this->request->getPost('users'), 'user_admin_id');

        // $current_timestamp = date('Y-m-d H:i:s');
        // $loginDetails = new LoginDetails();

        // $loginDetails->whereIn('user_admin_id', $users)->set(['last_activity' => $current_timestamp])->update();


        // $getFriendTimestamps = $loginDetails->whereIn('user_admin_id', $users)->findAll();

        $user_id = $this->request->getPost('user_id');
        $current_timestamp = date('Y-m-d H:i:s');

        $loginDetails = new LoginDetails();
        $loginDetails->where('user_admin_id', $user_id)->set('last_activity', $current_timestamp)->update();
    }

    public function getIdleTime(){

        // $users = array_column($this->request->getPost('users'), 'user_admin_id');

        // $current_timestamp = date('Y-m-d H:i:s');
        // $loginDetails = new LoginDetails();

        // 


        // $getFriendTimestamps = $loginDetails->whereIn('user_admin_id', $users)->findAll();

        $users_id = array_column($this->request->getPost('users_id'), 'user_admin_id');
        $user_id = $this->request->getPost('user_id');
        $current_timestamp = date('Y-m-d H:i:s');

        $minutesIdleView = new MinutesIdleView();
        $active_minutes = $minutesIdleView->whereIn('user_admin_id', $users_id)->where('user_admin_id !=', $user_id)->findAll();
        return $this->response->setJSON($active_minutes);

        // if($active_minutes){
        //     return $this->response->setJSON($active_minutes);
        // } else {
        //     return $this->response->setStatusCode(400);//????????
        // }
    }
}