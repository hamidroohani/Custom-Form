<?php

namespace App\Models;

use App\Http\Config;

abstract class DB
{
    public $connstr = null;
    public $table = "users";
    public $query = null;
    public $where_count = 0;

    public $hostname = null;

    public function __construct()
    {
        $this->connstr = mysqli_connect(\config('MYSQL_HOST'), \config('MYSQL_USERNAME'), \config('MYSQL_PASSWORD'), \config('MYSQL_DATABASE'));
    }

    public function check_table_exists()
    {
        if (!$this->connstr){
            Response::db_connection_not_exists();
        }

        $this->query = mysqli_query($this->connstr, "SHOW TABLES LIKE '" . $this->table ."';");
        $result = [];
        while ($res=mysqli_fetch_assoc($this->query)) {
            array_push($result, $res);
        }
        if (!count($result)){
            Response::db_connection_not_exists();
        }
    }


    public function where($field, $opr, $val)
    {
        if ($this->where_count > 0) {
            $this->query .= " AND ";
        } else {
            $this->query .= " WHERE ";
        }
        $this->query .= " {$field} {$opr} '{$val}'";

        $this->where_count++;

        return $this;
    }

    public function orWhere($field, $opr, $val)
    {
        $this->query .= " or {$field} {$opr} '{$val}'";

        return $this;
    }

    public function limit($val)
    {
        $this->query .= " LIMIT " . intval($val) . " ";

        return $this;
    }

    public function join($table, $field)
    {
        $this->query .= " JOIN {$table} ON {$this->table}.{$field} = {$table}.id ";

        return $this;
    }

    public function get()
    {
        $result = $this->fetch();

        return $result;
    }

    public function first()
    {
        $result = $this->fetch();

        return $result[0];
    }

    /**
     * @return array
     */
    public function fetch(): array
    {
        $this->query = mysqli_query($this->connstr, $this->query);
        $result = [];
        while ($res = mysqli_fetch_assoc($this->query)) {
            array_push($result, $res);
        }
        return $result;
    }

    public function create($data)
    {
        $keys = implode('`,`',array_keys($data));
        $values = implode("','",array_values($data));
        $query = "INSERT INTO " . $this->table . " (`" . $keys . "`) VALUES ('" . $values . "')";
        mysqli_query($this->connstr, $query);
    }

    public function raw($query)
    {
        $q = mysqli_query($this->connstr, $query);
        $result = [];
        while ($res = mysqli_fetch_assoc($q)) {
            array_push($result, $res);
        }
        return $result;
    }
}