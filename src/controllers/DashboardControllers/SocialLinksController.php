<?php

namespace Controllers;

class SocialLinksController
{
    public function social()
    {
        view('dashboard/social/social');
    }

    public function edit()
    {
        view('dashboard/social/social_edit');
    }
}