<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    // Fetch all users
    public function index()
    {
        $model = new UserModel();
        $data = $model->findAll();
        return $this->response->setJSON($data);
    }

    // Insert a sample user
    public function add()
    {
        $model = new UserModel();

        $data = [
            'role_id'  => 1,
            'name'     => 'Test User',
            'email'    => 'testuser@example.com',
            // hash password before saving
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            
        ];

        $model->createUser($data);

        return "User added successfully";
    }

    // Get a single user by ID
    public function show($id)
    {
        $model = new UserModel();
        $data = $model->getUser($id);

        return $this->response->setJSON($data);
    }

    // Update user
    public function update($id)
    {
        $model = new UserModel();

        $model->updateUser($id, [
            'name'   => 'Updated Name',
            
        ]);

        return "User updated successfully";
    }

    // Delete user
    public function delete($id)
    {
        $model = new UserModel();
        $model->deleteUser($id);

        return "User deleted successfully";
    }
}
