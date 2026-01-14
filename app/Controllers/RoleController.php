<?php

namespace App\Controllers;

use App\Models\RoleModel;

class RoleController extends BaseController
{
    // GET: Fetch all roles
    public function index()
    {
        $model = new RoleModel();
        $data = $model->getRoles();
        return $this->response->setJSON($data);
    }

    // GET: Insert a sample role (testing)
    public function add()
    {
        $model = new RoleModel();

        $model->addRole([
            'role_name' => 'Admin'
        ]);

        return "Role added successfully";
    }

    // GET: Delete role by ID
    public function delete($id)
    {
        $model = new RoleModel();
        $model->deleteRole($id);
        return "Role deleted successfully";
    }
}
