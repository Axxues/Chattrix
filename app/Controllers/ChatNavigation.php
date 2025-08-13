<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\FriendsModel;

class ChatNavigation extends BaseController
{
    public function _remap($method, ...$params){
        if(method_exists($this, $method)){
            return $this->$method($params);
        } else {
            return $this->show404();
        }
    }

    public function show404(){
        return view('404.php');
    }
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
