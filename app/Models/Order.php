<?php


namespace App\Models;


use App\Http\Config;

class Order extends DB
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "orders";
        $this->query = "select * from " . $this->table . " where 1 ";
        return $this;
    }
}