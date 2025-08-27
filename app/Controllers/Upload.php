<?php

namespace App\Controllers;

// defined('BASEPATH') OR exit('No direct script access allowed');

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Upload extends BaseController
{
    public function __construct() {
    // parent::__construct();
    helper(['url', 'form']); // Load helpers (new syntax)
    // $this->upload = \Config\Services::upload(); // Load Upload service
    // $this->session = \Config\Services::session(); // Load Session service
}

    public function upload()
    {
        $sender = $this->request->getPost('sender_id');
        $receiver = $this->request->getPost('receiver_id');
        $files = $this->request->getFiles();

if (isset($files['input-file'])) {
    $count = 0;
    foreach ($files['input-file'] as $file) {
        $count += 1;
    }
    echo "Total files uploaded: " . $count;
} else {
    echo "No files were uploaded.";
}

        // $config = [
        //     'upload_path'   => WRITEPATH . 'uploads/conversations/conv_' . $sender . '_' . $receiver . '/',
        //     'allowed_types' => 'gif|jpg|png|pdf',
        //     'max_size'      => 2048, // 2MB
        //     'encrypt_name'  => true, // Randomize filenames
        // ];

        
    }
}
