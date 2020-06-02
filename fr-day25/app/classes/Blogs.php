<?php

namespace App\Classes;


class Blogs
{
    public function addBlogInfo($data)
    {
        $fileName = $_FILES['blog_image']['name'];
        $directory = '../assets/images/';
        $imageUrl = $directory . $fileName;
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['blog_image']['tmp_name']);
        if ($check) {
            if (file_exists($imageUrl)) {
                die('This image alrady exits. please select another one. thanks.');
            } else {
                if ($_FILES['blog_image']['size'] > 500000) {
                    die('Your image size is too long . please select within 48kb .');
                } else {
                    if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'PNG' && $fileType != 'JPG') {
                        die('Image type is not suppoted .please select jpg or png .');
                    } else {
                        move_uploaded_file($_FILES['blog_image']['tmp_name'], $imageUrl);
                        $sql = "INSERT INTO blog_info (category_id,blog_title,short_description,long_description,blog_image,status) VALUES('$data[category_id]','$data[blog_title]','$data[short_description]','$data[long_description]','$imageUrl','$data[status]')";
                        if (mysqli_query(Database::dbconnection(), $sql)) {
                            $message = "Blog info save successfully";
                            return $message;
                        }else{
                            die('Queary problem'.mysqli_error(Database::dbconnection()));
                        }
                    }
                }
            }
        } else{
            die('Please chose a image file thanks !');
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
   
    public function editBlogInfoById($id){
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
    public function getAllPublishedCategoryInfo(){
        $sql = "SELECT * FROM category WHERE status = 0 ";
        If( mysqli_query(Database::dbconnection(), $sql)){
            $qureyResult = mysqli_query(Database::dbconnection(), $sql);
            return $qureyResult;
        } else{
            die('Queary problem'.mysqli_error(Database::dbconnection()));
        }
    }
}