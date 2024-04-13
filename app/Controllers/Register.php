<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function process()
    {
        $userModel = new UserModel();

        // Validate the input
        $validationRules = [
            'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('register')->withInput()->with('errors', $this->validator->getErrors());
        }

        // Create a new user record
        $userData = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $userModel->insert($userData);

        return redirect()->to('login')->with('success', 'Registration successful. Please login.');
    }
}
