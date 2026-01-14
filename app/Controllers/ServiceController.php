<?php

namespace App\Controllers;

use App\Models\ServiceModel;

class ServiceController extends BaseController
{
    // Fetch all services
    public function index()
    {
        $model = new ServiceModel();
        return $this->response->setJSON($model->findAll());
    }

    // Insert a service (CORRECT)
    public function add()
    {
        $model = new ServiceModel();

        $data = [
            'ticket_id'    => 1, // MUST exist in tickets table
            'service_date' => date('Y-m-d'),
            'remarks'      => 'General repair completed'
        ];

        if ($model->insert($data)) {
            return "Service added successfully";
        } else {
            return $this->response->setJSON($model->errors());
        }
    }

    // Update service
    public function update($id)
    {
        $model = new ServiceModel();

        $data = [
            'service_date' => date('Y-m-d'),
            'remarks'      => 'Service updated'
        ];

        if ($model->update($id, $data)) {
            return "Service updated successfully";
        } else {
            return $this->response->setJSON($model->errors());
        }
    }

    // Delete service
    public function delete($id)
    {
        $model = new ServiceModel();

        if ($model->delete($id)) {
            return "Service deleted successfully";
        } else {
            return "Delete failed";
        }
    }
}
