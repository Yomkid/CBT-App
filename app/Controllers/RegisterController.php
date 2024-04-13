<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function register()
    {
        // Define validation rules
        $validationRules = [
            'username' => 'required',
            'email'    => 'required|valid_email',
            'password' => 'required'
        ];

        // Set custom error messages
        $validationMessages = [
            'email' => [
                'valid_email' => 'The {field} field must contain a valid email address.'
            ]
        ];

        // Perform validation
        if (!$this->validate($validationRules, $validationMessages)) {
            // If validation fails, redirect back to the registration form with validation errors
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // If validation passes, proceed with registration
        $model = new UserModel();

        // Get uploaded file
        $profileImage = $this->request->getFile('profile_image');

        // Fetch the inserted user ID
        $userId = null;
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        // Insert data into the database
        if ($model->insert($data)) {
            $userId = $model->insertID(); // Get the inserted user ID
        }

        // Generate filename with username, prefix, user ID, date, and time
        $newName = $this->request->getPost('username') . '_img_JETA_' . $userId . '_' . date('YmdHis') . '_' . rand(100, 999) . '.' . $profileImage->getExtension();

        // Move uploaded file to a directory (e.g., public/uploads)
        if ($profileImage->isValid() && !$profileImage->hasMoved()) {
            $profileImage->move(ROOTPATH . 'public/uploads', $newName);
        }

        // Update the user record with the profile image filename
        $data['profile_image'] = $newName;
        $model->update($userId, $data);

        return redirect()->to('/login'); // Redirect to login page after successful registration
    }
}
