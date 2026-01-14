<?php

namespace App\Models;

use CodeIgniter\Model;

class EngineerModel extends Model
{
    protected $table      = 'engineers';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'phone',
        'specialization'
    ];

    public function getEngineers()
    {
        return $this->findAll();
    }

    public function addEngineer($data)
    {
        return $this->insert($data);
    }

    public function updateEngineer($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteEngineer($id)
    {
        return $this->delete($id);
    }
}
