<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 05/08/19
 * Time: 22:17
 */

class Crud
{
    private $modelPengguna;
    private $db;
    function __construct()
    {
        $this->db = new Db();
        $this->modelPengguna = new ModelPengguna();
    }
    function index(){
        $data = $this->modelPengguna->getAll();
        $exec = $this->db->conn->query($data);
        return $exec;
    }
}