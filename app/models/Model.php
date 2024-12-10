<?php

namespace app\models;

use PDO;

class Model {

    protected $db1;  
    protected $db2;  
    protected $db3; 
    
    public function __construct() {
        $this->db1 = $this->connectToDB1();
        $this->db2 = $this->connectToDB2();
        $this->db3 = $this->connectToDB3();
    }

    // Connect to the first database (portfolio)
    private function connectToDB1() {
        try {
            $dsn = "mysql:host=" . DBHOST . ";port=" . DBPORT . ";dbname=" . DBNAME;
            $db = new PDO($dsn, DBUSER, DBPASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (\Exception $e) {
            die("Connection failed to DB1: " . $e->getMessage());
        }
    }

    // Connect to the second database (contact messages)
    private function connectToDB2() {
        try {
            $dsn = "mysql:host=" . DBHOST . ";port=" . DBPORT . ";dbname=" . DBNAME;
            $db = new PDO($dsn, DBUSER, DBPASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (\Exception $e) {
            die("Connection failed to DB2: " . $e->getMessage());
        }
    }

    // Connect to the third database (contact messages)
    private function connectToDB3() {
        try {
            $dsn = "mysql:host=" . DBHOST . ";port=" . DBPORT . ";dbname=" . DBNAME;
            $db = new PDO($dsn, DBUSER, DBPASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (\Exception $e) {
            die("Connection failed to DB3: " . $e->getMessage());
        }
    }
}
?>