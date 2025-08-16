<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LoginDetails;

class IsTypingStatus extends BaseController
{
    public function is_typing()
    {
        $login_details = new LoginDetails();
        $typing_status = $this->request->getPost('is_typing');
        $user_id = $this->request->getPost('user_id');
        $friend_id = $this->request->getPost('friend_id');

        $result1 = $login_details->where('user_admin_id', $user_id)->first();
        if($result1){
            $result2 = $login_details->where('is_typing', $typing_status)->first();
            if($result2 !== $typing_status){
                $login_details->set(['is_typing' => $typing_status, 'is_typing_to' => $friend_id])
              ->where('user_admin_id', $user_id)
              ->update();
            }
        }
    }
}
