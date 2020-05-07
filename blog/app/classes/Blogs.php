<?php

namespace App\Classes;


class Blogs
{
    public function addBlogInfo($data){
        $sql = "INSERT INTO blog_info (category_name,blog_title,short_description,long_description,images,status) VALUES('$data[category_name]','$data[blog_title]','$data[short_description]','$data[long_description]','$data[images]','$data[status]]')";
        If(mysqli_query(Database::dbconnection(), $sql)){
         $message= "Blog info save successfully";
         return $message;

      } else{
          die('Queary problem'.mysqli_error(Database::dbconnection()));
      }
           
       
    }

    public function manageBlogInfo(){
        $sql = "SELECT * FROM blog_info";

        If( mysqli_query(Database::dbconnection(), $sql)){
            $qureyResult=mysqli_query(Database::dbconnection(), $sql);
            return $qureyResult;
        } else{
            die('Queary problem'.mysqli_error(Database::dbconnection()));
        }
    }
   
    public function editBlogInfoById($id)
    {
        $sql = "SELECT * FROM blog_info where id ='$id'";
        If (mysqli_query(Database::dbconnection(), $sql)) {
            $qureyResult = mysqli_query(Database::dbconnection(), $sql);
            return $qureyResult;
        } else {
            die('Queary problem' . mysqli_error(Database::dbconnection()));
        }

    }
    public function updateBlogInfo($data){
        $sql = "UPDATE blog_info SET category_name = '$data[category_name]', blog_title = '$data[blog_title]', short_description = '$data[short_description]', long_description = '$data[long_description]', images = '$data[images]', status = '$data[status]' WHERE id='$data[id]' ";
        If (mysqli_query(Database::dbconnection(), $sql)) {
            header('Location:manage-blog.php');
        } else {
            die('Queary problem' . mysqli_error(Database::dbconnection()));
        }
    }
     public function deleteBlogInfo($id){
        $sql = "DELETE FROM blog_info where id = '$id' ";
        If( mysqli_query(Database::dbconnection(), $sql)){
            $message= "Blog info delete successfully";
            return $message;
        } else{
            die('Queary problem'.mysqli_error(Database::dbconnection()));
        }
    
    }
}