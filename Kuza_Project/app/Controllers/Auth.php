<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function getIndex()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function save()
    {
        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your full name is required'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required',
                    'valid_email' => 'You must enter a valid email',
                    'is_unique' => 'Email already exists'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'Password is required',
                    'min_length' => 'Password must be at least 5 characters in length',
                    'max_length' => 'Password must not have more than 12 characters in length'
                ]
            ],
            'cpassword' => [
                'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
                'errors' => [
                    'required' => 'Confirm password must be at least 5 characters in length',
                    'max_length' => 'Confirm password must not have more than 12 characters in length',
                    'matches' => 'Confirm password does not match the password'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/register', ['validation' => $this->validator]);
        } else {
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $values = [
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ];
            $usersModel = new \App\Models\UsersModel();
            $query = $usersModel->insert($values);

            if (!$query) {
                return redirect()->back()->with('fail', 'Something went wrong');
            } else {
                return redirect()->to('register')->with('success', 'You are now registered successfully');
            }
        }
    }
}
