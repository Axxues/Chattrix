<?php
namespace App\Controllers;

use App\Models\MessagesModel;

class SendMessage extends BaseController
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
}