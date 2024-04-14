<?php

namespace App\Controllers;

use App\Models\Order;

class OrderController extends BaseController
{
    public function index()
    {
        $orders = new Order();
        $orders = $orders->join('users', 'user_id')->get();

        $this->view("orders/list",['orders' => $orders]);
    }

    public function create()
    {
        $this->view("orders/create");
    }

    public function store()
    {
        $request = $_POST;

        // validate
        $validate = $this->validate($request, [
            "title" => "required|min 4",
            "count" => "required",
            "user_id" => "required",
            "address" => "required|min 4",
        ]);

        if (!empty($validate)) {
            flash($validate);
            $this->redirect('/orders/create');
        }

        $order = new Order();
        $order->create([
            'user_id' => $request['user_id'],
            'title' => $request['title'],
            'count' => $request['count'],
            'address' => $request['address'],
        ]);

        $this->redirect('/orders');
    }
}