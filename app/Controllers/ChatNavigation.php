<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\FriendsModel;

class ChatNavigation extends BaseController
{
    public function view($id)
    {
        $userModel = new FriendsModel();
        $friend = $userModel->where('user_admin_id', $id)->first();

        $userModel = new FriendsModel();
        $users = $userModel->findAll(); 

        if(!$friend){
            echo 'Friend not found!, Controller ChatNavigation';
        } else {
            return view('Main/templates/header')
            . view('Main/main_page', [
                'friend' => $friend,
                'users'   => $users
            ])
            . view('Main/templates/footer');

        }
    }
}
