<?php

namespace App\Controllers;
use App\Libraries\Hash;
use App\Models\UsersModel;
use App\Models\LoginDetails;


class Auth extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

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

    public function sign_in(): string
    {
        return view('auth/templates/header.php')
        . view('auth/sign_in_view.php')
        . view('auth/templates/footer.php');
    }

    public function sign_up(): string
    {
        return view('auth/templates/header.php')
        . view('auth/sign_up_view.php')
        . view('auth/templates/footer.php');
    }

    public function save(){
        // $validation = $this->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required|valid_email|is_unique[user_admin.email]',
        //     'password' => 'required|min_length[5]|max_length[20]',
        //     'confirm_password' => 'required|min_length[5]|max_length[20]|matches[password]'
        // ]);

        $validation = $this->validate([
            'first_name' => [
                'rules'=>'required',
                'errors'=>[
                    'required'=>'First name is required!'
                ]
            ],
            'last_name' => [
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Last name is required!'
                ]
            ],
            'email' => [
                'rules'=>'required|valid_email|is_unique[user_admin.email]',
                'errors'=>[
                    'required'=>'Email is required!',
                    'valid_email'=>'Please enter a valid email!',
                    'is_unique'=>'Email already in use!'
                ]
            ],
            'password' => [
                'rules'=>'required|min_length[5]|max_length[20]',
                'errors'=>[
                    'required'=>'Please enter a password!',
                    'min_length'=>' Password must have atleast 5 characters!',
                    'max_length'=>"Password shouldn't exceed 20 characters!"
                ]
            ],
            'confirm_password' => [
                'rules'=>'required|matches[password]',
                'errors'=>[
                    'required'=>'Please enter a confirm password!',
                    'matches'=>"Confirm password doesn't match the password"
                ]
            ]
        ]);

        if(!$validation){
            return view('auth/templates/header.php')
            . view('auth/sign_up_view',['validation'=>$this->validator])
            . view('auth/templates/footer.php');
        } else {
            $first_name = htmlspecialchars($this->request->getPost('first_name'));
            $last_name = htmlspecialchars($this->request->getPost('last_name'));
            $email = htmlspecialchars($this->request->getPost('email'));
            $password = htmlspecialchars($this->request->getPost('password'));

            $values = [
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'email'=>$email,
                'password'=>Hash::make($password)
            ];

            //---------------------------Adding new users---------------------------
            $usersModel = new UsersModel();
            $query = $usersModel->insert($values);
            if(!$query){
                return redirect()->to('sign_up')->with('fail', 'Something went wrong!');
            } else {
                return redirect()->to('sign_up')->with('success', 'The account has been registered successfully!');
            }
        }
    }

    public function check(){
        $validation = $this->validate([
            'email' => [
                'rules'=>'required|valid_email|is_not_unique[user_admin.email]',
                'errors'=>[
                    'required'=>'Email is required!',
                    'valid_email'=>'Please enter a valid email!',
                    'is_not_unique'=>'Email is not registered in out system!'
                ]
            ],
            'password' => [
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Please enter a password!'
                ]
            ]
        ]);

        if(!$validation){
            return view('auth/templates/header.php')
            . view('auth/sign_in_view',['validation'=>$this->validator])
            . view('auth/templates/footer.php');
        } else {
            $email = htmlspecialchars($this->request->getPost('email'));
            $password = htmlspecialchars($this->request->getPost('password'));
            $usersModel = new UsersModel();
            $user_info = $usersModel->where('email', $email)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if(!$check_password){
                return redirect()->to('sign_in')->with('fail', 'Incorrect password!');
            } else {
                //---------------------------Adding new user login details---------------------------
                $loginDetails = new LoginDetails();
                $login_info = $loginDetails->where('user_admin_id', $user_info['user_admin_id'])->first();
                if(!$login_info){
                    $loginDetails->insert([
                        'user_admin_id'=>$user_info['user_admin_id']
                    ]);
                } else {
                    
                }
                //---------------------------Adding new user login details ends---------------------------

                $user_id = $user_info['user_admin_id'];
                $user_name = $user_info['first_name'] . ' ' . $user_info['last_name'];

                session()->set('loggedUser', $user_id);
                session()->set('userName', $user_name);
                return redirect()->to('chat');
            }
        }
    }
}