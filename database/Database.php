<?php

class Database
{
    private static $obj;
    private $db_connect;

    private final function __construct()
    {
        $host = DB_HOST;
        $user = DB_USER;
        $pass = DB_PASSWORD;
        $dbname = DB_NAME;

        $this->db_connect = new mysqli($host, $user, $pass, $dbname);
    }

    public static function getConnect()
    {
        if (!isset(self::$obj)) {
            self::$obj = new Database;
        }
        return self::$obj;
    }

    public function select($query)
    {
        $result = $this->db_connect->query($query) or die($this->db_connect->error . __LINE__);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function create($query)
    {
        $result = $this->db_connect->query($query) or die($this->db_connect->error . __LINE__);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
