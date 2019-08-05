<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 05/08/19
 * Time: 22:40
 */

class ModelPengguna
{
    function __construct()
    {
    }
    function getAll(){
        $query = "Select * From data_pengguna";
        return $query;
    }
}