<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends BaseController
{
    public function logout()
    {
        // Add your logout logic here
        // After logout, redirect to the login page
        return redirect()->to('/login');
    }
    
    public function __construct()
    {
        // No need to load helpers in the constructor
    }
    
    public function index()
    {
        helper(['url', 'form']);
        return view('auth/login');
    }

    public function register()
    {
        helper(['url', 'form']);
        return view('auth/register');
    }

    public function save()
    {
        helper(['url', 'form']);

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
                    'required' => 'Confirm password is required',
                    'min_length' => 'Confirm password must be at least 5 characters in length',
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
                return redirect()->to('/login')->with('success', 'You are now registered successfully');
            }
        }
    }

    public function login()
    {
        helper(['url', 'form']);

        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email is required',
                    'valid_email' => 'You must enter a valid email',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'Password is required',
                    'min_length' => 'Password must be at least 5 characters in length',
                    'max_length' => 'Password must not have more than 12 characters in length'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/login', ['validation' => $this->validator]);
        } else {
            // Perform login logic here
            return redirect()->to('/home');
        }
    }
}
