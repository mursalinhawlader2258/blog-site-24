<?php


namespace App\Classes;

use App\Classes\Database;
class Login
{
 public function adminLoginCheck($data){
     $email = $data['email'];
     $password = md5($data['password']);
     $sql = "SELECT * FROM users WHERE email='$email' AND password = '$password' ";
     if (mysqli_query(Database::dbconnection(), $sql)){
         $queryResult= mysqli_query(Database::dbconnection(), $sql);
         $user= mysqli_fetch_assoc($queryResult);
         if($user){
             session_start();
             $_SESSION['id'] = $user['id'];
             $_SESSION['name'] = $user['name'];

             header('Location:dashboard.php');
         }else{
             $message = "Please use valid email & password";
             return $message;
         }
     }else{
         dic("Query Problem".mysqli_error(\App\Classes\Database::dbconnection()));
     }
 }
 public function adminLogout() {
     unset($_SESSION['id']);
     unset($_SESSION['name']);

     header('Location:index.php');
 }
}