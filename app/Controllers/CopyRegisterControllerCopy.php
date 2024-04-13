<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function register()
{
    $model = new UserModel();

    // Get uploaded file
    $profileImage = $this->request->getFile('profile_image');

    // // Move uploaded file to a directory (e.g., public/uploads)
    // if ($profileImage->isValid() && !$profileImage->hasMoved()) {
    //     $newName = $profileImage->getRandomName();
    //     $profileImage->move(ROOTPATH . 'public/uploads', $newName);
    // }

     // Move uploaded file to a directory (e.g., public/uploads)
     if ($profileImage->isValid() && !$profileImage->hasMoved()) {
        // Generate new file name using the username
        $newName = $this->request->getPost('username') . '.' . $profileImage->getExtension();
        $profileImage->move(ROOTPATH . 'public/uploads', $newName);
    }

    $data = [
        'username' => $this->request->getPost('username'),
        'email'    => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        'profile_image' => $newName // Save the filename to the database
    ];
    
    // Insert data into the database
    $model = new UserModel();
    $model->insert($data);
    

    return redirect()->to('/login'); // Redirect to login page after successful registration
}

}