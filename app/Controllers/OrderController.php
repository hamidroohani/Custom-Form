<?php

namespace App\Controllers;

use App\Models\Order;

class OrderController extends BaseController
{
    public function index()
    {
        $orders = new Order();
        $orders = $orders->get();

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
            "name" => "required|min 4",
            "count" => "required",
            "address" => "required|min 4",
        ]);

        if (!empty($validate)) {
            flash($validate);
            $this->redirect('/orders/create');
        }

        $order = new Order();
        $order->create([
            'name' => $request['name'],
            'count' => $request['count'],
            'address' => md5($request['address']),
        ]);

        $this->redirect('/orders');
    }
}