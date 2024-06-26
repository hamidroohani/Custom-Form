<?php


namespace App\Http;


class Config
{
    const CONTROLLERS_PATH = "../app/Controllers/";
    const RESOURCES_PATH = "../resources/";
    const LAYOUT_PATH = "../resources/layout/app.php";
    private static $file;

    public static function read_file()
    {
        $file = file_get_contents(__DIR__ . '/../../.env');
        $file = preg_split('/\s+/', $file);
        $result = [];
        foreach ($file as $item)
        {
            $values = explode("=",$item);
            $result[$values[0]] = $values[1] ?? '';
        }
        self::$file = $result;
    }

    public static function config($key)
    {
        self::read_file();
        return self::$file[$key] ?? null;
    }

}