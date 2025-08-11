<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MessagesModel;

class FetchMessage extends BaseController
{
    public function fetch()
    {
        $sender = $this->request->getPost('senderId');
        $receiver = $this->request->getPost('receiverId');

        // echo 'Sender Id: ' . $sender;
        // echo 'Receiver Id: ' . $receiver;

        $messagesModel = new MessagesModel();
        $messages = $messagesModel    ->groupStart()
        ->where('receiver', $receiver)
        ->where('sender', $sender)
        ->groupEnd()
        ->orGroupStart()
        ->where('receiver', $sender)
        ->where('sender', $receiver)
    ->groupEnd()->orderBy('messages_id', 'Asc')->findAll();
        if($messages){
            return $this->response->setJSON($messages);
        } else {
            return $this->response->setStatusCode(400);//????????
        }
        
    }
}
