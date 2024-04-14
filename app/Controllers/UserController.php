<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $data = 'List of Users';

        $this->view("users/list",['data' => $data]);
    }

    public function create()
    {
        $this->view("users/create");
    }

    public function store()
    {
        $request = $_POST;

        // validate
        $validate = $this->validate($request, [
            "name" => "required|min 4",
            "email" => "required|min 4",
            "password" => "required|min 4",
        ]);

        if (!empty($validate)) {
            flash($validate);
            $this->redirect('/users/create');
        }

        $this->view("users");
    }
}