<?php

namespace App\Controllers;

use App\Models\ActivityLogModel;

class ActivityLog extends BaseController
{
    // READ (Fetch all logs)
    public function index()
    {
        $model = new ActivityLogModel();
        return $this->response->setJSON($model->getLogs());
    }

    // INSERT (Test insert)
    public function add()
    {
        $model = new ActivityLogModel();

        $data = [
            'user_id'  => 1,
            'activity' => 'Test Activity Log'
        ];

        $model->addLog($data);

        return "Activity log inserted successfully";
    }
}
