<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class CollegesController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
    }

    public function addCollege()
    {

    }

    public function listColleges()
    {

    }

    public function editCollege($id = null)
    {

    }
    public function deleteCollege($id = null)
    {

    }

}
