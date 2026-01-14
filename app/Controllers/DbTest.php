<?php

namespace App\Controllers;

use CodeIgniter\Database\Exceptions\DatabaseException;

class DbTest extends BaseController
{
    public function index()
    {
        try {
            $db = \Config\Database::connect();
            return "Database Connected Successfully!";
        } catch (DatabaseException $e) {
            return "Connection Error: " . $e->getMessage();
        }
    }
}
