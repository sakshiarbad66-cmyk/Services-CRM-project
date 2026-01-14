<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table      = 'customers';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id',
        'name',
        'phone',
        'address'
    ];

    public function getCustomers()
    {
        return $this->findAll();
    }

    public function addCustomer($data)
    {
        return $this->insert($data);
    }

    public function updateCustomer($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteCustomer($id)
    {
        return $this->delete($id);
    }
}
