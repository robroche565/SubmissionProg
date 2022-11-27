<?php

require_once 'database.php';

class Reservation{
    //attributes

    public $res_id;

    public $firstname;
    public $lastname;
    public $res_date;
    public $server = 'None';

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //methods
    function add(){
        $sql = "INSERT INTO reservation (firstname, lastname, res_date, server) VALUES 
        (:firstname,:lastname, :res_date, :server);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':res_date', $this->res_date);
        $query->bindParam(':server', $this->server);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
        
        
        
    }

}

?>