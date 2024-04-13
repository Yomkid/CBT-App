<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Auth extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        // Validate input
        $validationRules = [
            'username' => 'required',
            'password' => 'required'
        ];
        
        if (!$this->validate($validationRules)) {
            // If validation fails, redirect back to the login form with validation errors
            $this->session->setFlashdata('error', 'Invalid username or password');
            return redirect()->back()->withInput();
        }
        
        // Get input data
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        // Check if user exists in the database
        $userModel = new \App\Models\UserModel(); // Assuming you have a UserModel
        $user = $userModel->where('username', $username)->first();
        
        if (!$user || !password_verify($password, $user['password'])) {
            // If user doesn't exist or password doesn't match, show error message
            $this->session->setFlashdata('error', 'Invalid username or password');
            return redirect()->back()->withInput();
        }
        
        // Set user session or authentication status
        // Example: $this->session->set('user_id', $user['id']);
        
        // Redirect to dashboard or any other page
        return redirect()->to('/admin');
    }
}
