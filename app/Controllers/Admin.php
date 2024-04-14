<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;


class Admin extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        // Get logged-in user's data
        $userData = [];
    
        // Check if the user is logged in
        if ($this->session->get('isLoggedIn')) {
            // Get the user ID from the session
            $userId = $this->session->get('userId');
            
            // Load the UserModel
            $userModel = new \App\Models\UserModel();
            
            // Fetch user data from the database based on the user ID
            $userData = $userModel->find($userId);
    
            // Check if the user has the "admin" role
            if ($userData && $userData['role'] === 'admin') {
                // If user is admin, allow access to the page
                // Fetch user data here and pass it to the view
                return view('admin/index', ['userData' => $userData]);
            } else {
                // If user is not admin, redirect to another page or show an access denied message
                return redirect()->to('/');
            }
        } else {
            // If user is not logged in, redirect to the login page
            // return redirect()->to('/login');
            return redirect()->to('/access-denied');

        }
    }
    
     
    public function users()
    {
         // Check if the user is logged in
    if (!$this->session->get('isLoggedIn')) {
        return redirect()->to('/login');
    }

    // Fetch user data from the database
    $userModel = new UserModel();
    $users = $userModel->findAll();

    // Pass user data to the view
    return view('Admin/users', ['users' => $users]);
        return view('admin/users');
    }
    public function q_bank()
    {
        return view('admin/question_bank');
    }
    public function test()
    {
        return view('admin/test');
    }
}