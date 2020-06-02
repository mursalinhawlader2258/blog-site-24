<?php


namespace App\Classes;


class EditCategory
{
    public function editCategoryInfoById($id)
    {
        $sql = "SELECT * FROM category where id ='$id'";
        If (mysqli_query(Database::dbconnection(), $sql)) {
            $qureyResult = mysqli_query(Database::dbconnection(), $sql);
            return $qureyResult;
        } else {
            die('Queary problem' . mysqli_error(Database::dbconnection()));
        }

    }

    public function updateCategoryInfo($data){
        $sql = "UPDATE category SET category_name = '$data[category_name]', category_description = '$data[category_description]', status = '$data[status]' WHERE id='$data[id]' ";
        If (mysqli_query(Database::dbconnection(), $sql)) {
            header('Location:manage-category.php');
        } else {
            die('Queary problem' . mysqli_error(Database::dbconnection()));
        }
    }
    public function deleteCategoryInfo($id){
        $sql = "DELETE FROM category where id = '$id' ";
        If( mysqli_query(Database::dbconnection(), $sql)){
            $message= "Category info delete successfully";
            return $message;
        } else{
            die('Queary problem'.mysqli_error(Database::dbconnection()));
        }
    }
}