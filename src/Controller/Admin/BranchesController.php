<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class BranchesController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
    }

    public function addBranch()
    {

    }

    public function listBranches()
    {

    }

    public function editBranch($id = null)
    {

    }
    public function deleteBranch($id = null)
    {

    }

}
