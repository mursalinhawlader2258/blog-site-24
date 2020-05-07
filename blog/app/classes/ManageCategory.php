<?php

namespace App\Classes;


class ManageCategory
{
    public function manageCategoryInfo(){
        $sql = "SELECT * FROM category";

        If( mysqli_query(Database::dbconnection(), $sql)){
            $qureyResult=mysqli_query(Database::dbconnection(), $sql);
            return $qureyResult;
        } else{
            die('Queary problem'.mysqli_error(Database::dbconnection()));
        }
    }
}