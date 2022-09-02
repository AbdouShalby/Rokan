<?php

namespace Controllers;

class StatsController
{
    public function stats()
    {
        view('dashboard/stats/stats');
    }

    public function edit()
    {
        view('dashboard/stats/stats_edit');
    }
}