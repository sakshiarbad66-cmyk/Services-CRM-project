<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table      = 'services';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'ticket_id',
        'service_date',
        'remarks'
        
    ];

    protected $useTimestamps = false;

    public function getServices()
    {
        return $this->findAll();
    }

    public function addService($data)
    {
        return $this->insert($data);
    }

    public function updateService($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteService($id)
    {
        return $this->delete($id);
    }
}
