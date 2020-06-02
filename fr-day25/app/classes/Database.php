<?php

namespace App\Classes;


class Database
{
    public function dbconnection(){
        $hostName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "blog";
        $link = mysqli_connect($hostName, $userName, $password, $dbName);
        return $link;
    }
}