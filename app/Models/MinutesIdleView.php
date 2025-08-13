<?php

namespace App\Models;

use CodeIgniter\Model;

class MinutesIdleView extends Model{
    protected $table = 'vw_minutes_idle'; 

    protected $primaryKey = 'login_details_id';

    protected $allowedFields = ['user_admin_id', 'minutes_idle'];

}

