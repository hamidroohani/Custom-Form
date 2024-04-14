<?php

function config($key){
    return \App\Http\Config::config($key);
}

function flash($msg){
    session_start();
    $_SESSION['err'] = $msg;
}

function show_errors($field){
    session_start();
    $err = @$_SESSION['err'];
    if (isset($err[$field])){
        foreach ($err[$field] as $e){
            echo $e;
        }
        unset($_SESSION['err'][$field]);
    }
}