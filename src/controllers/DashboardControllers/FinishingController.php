<?php

namespace Controllers;

class FinishingController
{
    public function packages()
    {
        view('dashboard/finishing/finishing_packages');
    }

    public function package_edit()
    {
        view('dashboard/finishing/finishing_edit');
    }

    public function package_delete()
    {
        view('dashboard/finishing/finishing_delete');
    }

    public function orders()
    {
        view('dashboard/finishing/finishing_orders');
    }
}