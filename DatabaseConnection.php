<?php 

class DatabaseConnection
{    
    protected $link;
    private $db;
    private $host;
    private $user;
    private $password;
    function __construct($db,$host,$user,$password)
    {
        $this->link = new PDO(
            'mysql:host='.$host.';dbname='.$db,
            $user,
            $password
        );
    }
    function closeConnection()
    {
        $this->link = null;
    }
    
    public function query($query)
    {
        $stmt = $this->link->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
        return $result;
    }
}
?>