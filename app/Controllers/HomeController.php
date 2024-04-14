<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = 'Hello';

        $this->view("home",['data' => $data]);
    }
}