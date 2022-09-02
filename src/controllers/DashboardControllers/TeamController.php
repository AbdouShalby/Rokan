<?php

namespace Controllers;

class TeamController
{
    public function team()
    {
        view('dashboard/team/team');
    }

    public function edit()
    {
        view('dashboard/team/team_edit');
    }
}