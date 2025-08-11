<?php

namespace App\Controllers;

class Home extends BaseController
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
    
    public function index(): string
    {
        return view('welcome_message');
    }

    public function landing(): string
    {
        return view('templates/header.php')
        . view('landing_view.php')
        . view('templates/footer.php');
    }

    

}