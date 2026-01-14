<?php

namespace App\Models;

use CodeIgniter\Model;

class DeviceModel extends Model
{
    protected $table      = 'devices';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'customer_id',
        'device_name',
        'model',
        'serial_number'
    ];

    public function getDevices()
    {
        return $this->findAll();
    }

    public function addDevice($data)
    {
        return $this->insert($data);
    }

    public function updateDevice($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteDevice($id)
    {
        return $this->delete($id);
    }
}
