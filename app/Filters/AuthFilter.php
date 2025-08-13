<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('loggedUser')) {
            return redirect()->to('sign_in')->with('fail', 'You must be logged in to access that page.');
        } else {
            return view('Main/templates/header')
            . view('Main/main_page')
            . view('Main/templates/footer');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $response->setHeader('Content-Security-Policy', 
            "default-src 'self'; 
            script-src 'self' https://cdnjs.cloudflare.com https://code.jquery.com; 
            style-src 'self' https://fonts.googleapis.com https://cdn.jsdelivr.net https://cdnjs.cloudflare.com; 
            font-src 'self' https://fonts.gstatic.com; 
            img-src 'self' data:; 
            frame-ancestors 'none';"
        );
    }
}