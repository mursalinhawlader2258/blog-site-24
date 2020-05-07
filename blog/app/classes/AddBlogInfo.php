<?php

namespace App\Classes;


class AddBlogInfo
{

    public function saveCategoryInfo($data){
        $sql = "INSERT INTO category (category_name,category_description,status) VALUES ('$data[category_name]','$data[category_description]','$data[status]')";

        if (mysqli_query(Database::dbconnection(), $sql)){
            $message = "Category info save successfully";
            return $message;
        }else{
            die('Query Problem'.mysqli_error(Database::dbconnection()));
        }
    }
}