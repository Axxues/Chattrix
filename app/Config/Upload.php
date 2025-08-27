<?php

//Custom Config

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Upload extends BaseConfig
{
    // Upload directory path (relative to WRITEPATH)
    public $uploadPath = 'uploads';

    // Allowed file types
    public $allowedTypes = [
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png'  => 'image/png',
        'gif'  => 'image/gif',
        'pdf'  => 'application/pdf',
        'mp4'  => 'video/mp4',
        'mov'  => 'video/quicktime',
        'avi'  => 'video/x-msvideo',
        'webm' => 'video/webm'
    ];

    // Maximum file size in kilobytes (25MB)
    public $maxSize = 25600; // 25 * 1024

    // Maximum number of files that can be uploaded at once
    public $maxFiles = 10;

    // Should files be encrypted (renamed with random names)
    public $encryptName = true;

    // Overwrite existing files?
    public $overwrite = false;

    // Validation rules for file uploads
    public $validationRules = [
        'uploaded' => [
            'filesToUpload[]'
        ],
        'max_size' => [
            'filesToUpload[]',
            '{maxSize}'
        ],
        'mime_in' => [
            'filesToUpload[]',
            '{allowedTypes}'
        ],
        'ext_in' => [
            'filesToUpload[]',
            '{allowedExtensions}'
        ]
    ];

    // Custom error messages
    public $errorMessages = [
        'max_size' => 'File "{file}" is too large. Maximum size is {maxSize}KB.',
        'mime_in' => 'File "{file}" is not an allowed file type.',
        'ext_in' => 'File "{file}" has an invalid extension.',
        'uploaded' => 'File "{file}" was not uploaded correctly.'
    ];

    // Get allowed extensions as array
    public function getAllowedExtensions(): array
    {
        return array_keys($this->allowedTypes);
    }

    // Get allowed mime types as array
    public function getAllowedMimeTypes(): array
    {
        return array_values($this->allowedTypes);
    }

    // Get full upload path
    public function getUploadPath(): string
    {
        return WRITEPATH . $this->uploadPath . DIRECTORY_SEPARATOR;
    }

    // Initialize directory if it doesn't exist
    public function initDirectory(): bool
    {
        $path = $this->getUploadPath();
        
        if (!is_dir($path)) {
            return mkdir($path, 0755, true);
        }
        
        return true;
    }
}