<?php

namespace App\Controllers;
use App\Models\FriendsModel;

class Main extends BaseController
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

    public function __construct(){
        helper(['url','form']);
    }
    public function chat_page()
    {
        $userModel = new FriendsModel();

        $users = $userModel->findAll();

        return view('Main/templates/header')
        . view('Main/main_page', ['users' => $users])
        . view('Main/templates/footer');
        // }
    }
}
