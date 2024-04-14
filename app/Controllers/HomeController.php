<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends BaseController
{
    public function index()
    {
        $users = new User();
        $users = $users->get();

        $this->view("home",['users' => $users]);
    }
}