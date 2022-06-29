<?php

class Dbh
{
    protected $hostname = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'zuriphp';

    protected function connect()
    {
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: " . $conn->connect_error;
            exit();
        }
        return $conn;
    }
}
