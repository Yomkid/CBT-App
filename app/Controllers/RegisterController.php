<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use Config\Email;

class RegisterController extends Controller
{
    public function register()
    {
        // Define validation rules
        $validationRules = [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'phone_number'  => 'required',
            'email'         => 'required|valid_email|is_unique[users.email]',
            'password'      => 'required'
        ];

        // Set custom error messages
        $validationMessages = [
            'email' => [
                'is_unique'   => 'The {field} has already been taken',
                'valid_email' => 'Invalid email address.'
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
            'first_name'    => $this->request->getPost('first_name'),
            'last_name'     => $this->request->getPost('last_name'),
            'email'         => $this->request->getPost('email'),
            'phone_number'  => $this->request->getPost('phone_number'),
            'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        // Insert data into the database
        if ($model->insert($data)) {
            $userId = $model->insertID(); // Get the inserted user ID
        }

        // Generate filename with username, prefix, user ID, date, and time
        $newName = $this->request->getPost('first_name') . '_img_JETA_' . $userId . '_' . date('YmdHis') . '.' . $profileImage->getExtension();

        // Move uploaded file to a directory (e.g., public/uploads)
        if ($profileImage->isValid() && !$profileImage->hasMoved()) {
            $profileImage->move(ROOTPATH . 'public/uploads', $newName);
        }

        // Update the user record with the profile image filename
        $data['profile_image'] = $newName;
        $model->update($userId, $data);

        // Send registration notification email to the user
        $this->sendRegistrationEmail($data['email']);

        return redirect()->to('/login');// Redirect to login page after successful registration
        // return redirect()->to('/login')->with('success', 'Registration successful. Please log in.'); // Redirect to login page after successful registration
    }

    /**
     * Send registration notification email to the user
     *
     * @param string $email
     */
    private function sendRegistrationEmail(string $email)
    {
        $emailConfig = new Email();

        $email = \Config\Services::email();
        $email->initialize($emailConfig);

        $email->setTo($email);
        $email->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
        $email->setSubject('Registration Successful');
        $email->setMessage('Thank you for registering with us.');

        $email->send();
    }
}
