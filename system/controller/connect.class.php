<?php
class system {
    public function __construct(){
        $servername = "localhost";
        $user = "root";
        $pass = "";
        $mydb = "pnz";
        $pdo = new PDO("mysql:host=$servername;dbname=$mydb",$user,$pass);

        $this->db = $pdo;
    }
    public function db($type,$sql,$data = array()){
        if($type == "SELECT"){
            $prepares = $this->db->prepare($sql);
            $prepares->execute($data);
            $result = $prepares->fetch();
            return $result;
        }else{
            $prepares = $this->db->prepare($sql);
            return $prepares->execute($data);
        }
    }
    public function me($uid){
        return $this->db("SELECT","SELECT * FROM users WHERE uid = ?",array($uid));
    }
}