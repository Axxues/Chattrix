<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginDetails extends Model
{
    protected $table = 'login_details';
    protected $primaryKey = 'login_details_id';
    protected $allowedFields = ['user_admin_id','last_activity','is_typing','is_typing_to'];
}
