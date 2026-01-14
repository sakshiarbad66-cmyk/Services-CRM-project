<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'role_id',
        'name',
        'email',
        'password',
        
    ];

    // Insert user
    public function createUser($data)
    {
        return $this->insert($data);
    }

    // Get user by email (login)
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    // Get user by ID
    public function getUser($id)
    {
        return $this->find($id);
    }

    // Update user
    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    // Delete user
    public function deleteUser($id)
    {
        return $this->delete($id);
    }
}
