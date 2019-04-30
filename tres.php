<?php

require_once('DatabaseConnection.php');

class MyUserClass {

    private $dbconn;
        
    function __construct()
    {
        $this->dbconn = new DatabaseConnection(
            'dbname',
            'localhost',
            'user',
            'password'
        );

    }

    public function getUserList()
    {
        $results = $this->dbconn->query(
            'SELECT name FROM users ORDER BY name'
        );
        return $results;
    }
        
}

$users = new MyUserClass();
print_r($users->getUserList());

?>