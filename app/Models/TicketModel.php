<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    protected $table      = 'tickets';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'customer_id',
        'device_id',
        'engineer_id',
        'issue',
        'status'
    ];
    protected $useTimestamps = false;

    public function getTickets()
    {
        return $this->findAll();
    }

    public function addTicket($data)
    {
        return $this->insert($data);
    }

    public function updateTicket($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteTicket($id)
    {
        return $this->delete($id);
    }
}
