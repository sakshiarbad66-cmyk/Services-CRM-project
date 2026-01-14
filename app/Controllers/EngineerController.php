<?php

namespace App\Controllers;

use App\Models\EngineerModel;

class EngineerController extends BaseController
{
    // List all engineers
    public function index()
    {
        $model = new EngineerModel();
        $data['engineers'] = $model->findAll();
        return view('engineers/index', $data);
    }

    // Save engineer from form
    public function store()
    {
        $engineerModel = new EngineerModel();

        $user_id = $this->request->getPost('user_id');

        // ✅ VALIDATE user_id
        if (empty($user_id)) {
            return redirect()->back()->with('error', 'User ID is required');
        }

        $data = [
            'user_id'        => $user_id,   // MUST EXIST in users table
            'phone'          => $this->request->getPost('phone'),
            'specialization' => $this->request->getPost('specialization'),
        ];

        try {
            $engineerModel->insert($data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->to('/engineers')->with('success', 'Engineer added successfully');
    }

    // Test add engineer (SAFE)
    public function add()
    {
        $model = new EngineerModel();

        // ✅ CHECK IF USER EXISTS
        $userId = 1; // Change to an existing user ID

        if (! $model->db->table('users')->where('id', $userId)->countAllResults()) {
            return "User ID does not exist. Create user first.";
        }

        $model->insert([
            'user_id'        => $userId,
            'phone'          => '9876543210',
            'specialization' => 'Hardware Specialist'
        ]);

        return "Engineer added successfully";
    }

    // Update engineer
    public function update($id)
    {
        $model = new EngineerModel();

        $model->update($id, [
            'phone'          => '9998887777',
            'specialization' => 'Software + Hardware'
        ]);

        return "Engineer updated successfully";
    }

    // Delete engineer
    public function delete($id)
    {
        $model = new EngineerModel();
        $model->delete($id);

        return "Engineer deleted successfully";
    }
}
