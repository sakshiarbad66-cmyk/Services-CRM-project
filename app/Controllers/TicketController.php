<?php

namespace App\Controllers;

use App\Models\TicketModel;

class TicketController extends BaseController
{
    // Fetch all tickets
    public function index()
    {
        $model = new TicketModel();
        $data['tickets'] = $model->findAll();
        return view('tickets/index', $data); // or JSON if needed
    }

    // Insert a sample ticket (SAFE)
    public function add()
    {
        $model = new TicketModel();

        // ✅ USE EXISTING IDs ONLY
        $data = [
            'customer_id' => 1,   // MUST exist in customers table
            'device_id'   => 1,   // MUST exist in devices table
            'engineer_id' => 1,   // MUST exist in engineers table
            'issue'       => 'Internet not working',
            'status'      => 'Open'
        ];

        try {
            $model->insert($data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return "Ticket added successfully";
    }

    // Update ticket
    public function update($id)
    {
        $model = new TicketModel();

        $model->update($id, [
            'issue'  => 'Router replaced',
            'status' => 'In Progress'
        ]);

        return "Ticket updated successfully";
    }

    // Delete ticket
    public function delete($id)
    {
        $model = new TicketModel();
        $model->delete($id);

        return "Ticket deleted successfully";
    }
}
