<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class ReportsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
    }

    public function collegesReport()
    {

    }

    public function studentsReport()
    {

    }

    public function staffsReport()
    {

    }

}
