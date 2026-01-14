<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table      = 'roles';
    protected $primaryKey = 'id';

    protected $allowedFields = ['role_name'];

    // Fetch all roles
    public function getRoles()
    {
        return $this->findAll();
    }

    // Insert role
    public function addRole($data)
    {
        return $this->insert($data);
    }

    // Delete role
    public function deleteRole($id)
    {
        return $this->delete($id);
    }
}
