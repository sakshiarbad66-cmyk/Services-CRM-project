<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivityLogModel extends Model
{
    protected $table      = 'activity_logs';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'activity'
    ];

    public function addLog($data)
    {
        return $this->insert($data);
    }

    public function getLogs()
    {
        return $this->findAll();
    }
}
