<?php

class Connection {
    public static function make($config)
    {
        $pdo = new PDO("{$config["connection"]};dbname={$config["database"]};charset={$config["charset"]}", $config['user'], $config["password"]);
        return $pdo;
    }
}
