<?php
namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{
  protected $table = 'user_admin';
  protected $primaryKey = 'user_admin_id';
  protected $allowedFields = ['first_name','last_name','email','password'];
}