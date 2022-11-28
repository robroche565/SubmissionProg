<?php

require_once 'database.php';

class Reservation{
    //attributes

    public $res_id;

    public $res_date;
    public $server = 'None';
    public $cur_date;
    public $user_id;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //methods
    function add(){
        $sql = "INSERT INTO reservation (res_date, server,user_id) VALUES 
        (:res_date, :server,:user_id);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':res_date', $this->res_date);
        $query->bindParam(':server', $this->server);
        $query->bindParam(':user_id', $this->user_id);  
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }   
    }
    
    function show(){
        $sql = "SELECT reservation.res_date,reservation.server,reservation.cur_date,CONCAT(user.firstname,', ',user.lastname) AS fullname FROM reservation INNER JOIN user ON reservation.user_id = user.id;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
    function fetch($record_id){
        $sql = "SELECT * FROM reservation WHERE id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }
    

}

?>