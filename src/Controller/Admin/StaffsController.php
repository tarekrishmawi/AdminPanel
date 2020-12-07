<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class StaffsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
    }

    public function addStaff()
    {

    }

    public function listStaffs()
    {

    }

    public function editStaff($id = null)
    {

    }
    public function deleteStaff($id = null)
    {

    }

}
