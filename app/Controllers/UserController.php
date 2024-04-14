<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    public function index()
    {
        $users = new User();
        $users = $users->get();

        $this->view("users/list",['users' => $users]);
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

        $user = new User();
        $user->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => md5($request['password']),
        ]);

        $this->redirect('/users');
    }
}