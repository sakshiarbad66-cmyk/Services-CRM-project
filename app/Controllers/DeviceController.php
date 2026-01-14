<?php

namespace App\Controllers;
use App\Models\DeviceModel;

class DeviceController extends BaseController
{
    // Get all devices
    public function index()
    {
        $model = new DeviceModel();
        $data = $model->getDevices();

        return $this->response->setJSON($data);
    }

    // Insert a test device (example)
    public function add()
    {
        $model = new DeviceModel();

        $model->addDevice([
            'customer_id'   => 1,
            'device_name'   => 'Laptop',
            'model_no'         => 'Dell',
            
        ]);

        return "Device added successfully";
    }
}
