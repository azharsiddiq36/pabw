<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 05/08/19
 * Time: 22:00
 */

class Db
{
    public $username = "root";
    public $db = "testnvc";
    public $password = "kambing123";
    public $host = "localhost";
    public $conn;
    function __construct(){
        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->db);
        return  $this->conn;
    }
    function cekCon(){
        $msg = true;
        if ($this->conn->connect_error){
            $msg = false;
            die("Koneksi gagal: " . mysqli_connect_error());
        }
        return $msg;
    }

}