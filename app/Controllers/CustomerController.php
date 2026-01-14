<?php

namespace App\Controllers;
use App\Models\CustomerModel;

class CustomerController extends BaseController
{
    // Fetch all customers
    public function index()
    {
        $model = new CustomerModel();
        $data = $model->getCustomers();
        return $this->response->setJSON($data);
    }

    // Insert a sample customer
    public function add()
    {
        $model = new CustomerModel();
        $model->addCustomer([
            'company' => 'Example Company',
            'phone' => '1234567890',
            'address' => 'Some Address',
        ]);
        return "Customer inserted successfully";
    }
}
