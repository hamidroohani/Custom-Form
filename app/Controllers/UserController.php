<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $data = 'List of Users';

        $this->view("users",['data' => $data]);
    }
}