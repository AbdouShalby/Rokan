<?php

namespace Controllers;

class OurworkController
{
    public function ourwork()
    {
        view('dashboard/ourwork/ourwork');
    }

    public function add()
    {
        view('dashboard/ourwork/ourwork_add');
    }

    public function edit()
    {
        view('dashboard/ourwork/ourwork_edit');
    }

    public function delete()
    {
        view('dashboard/ourwork/ourwork_delete');
    }
}