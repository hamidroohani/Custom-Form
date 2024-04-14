<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends BaseController
{
    public function index()
    {
        $users = new User();
        $users = $users->raw("SELECT u.*, COUNT(o.user_id) AS order_count, MAX(o.created_at) AS last_order_time
        FROM users u
        LEFT JOIN orders o ON u.id = o.user_id
        GROUP BY u.id
        ORDER BY order_count DESC");

        $this->view("home",['users' => $users]);
    }
}