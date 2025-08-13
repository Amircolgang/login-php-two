<?php

require_once("../config/loader.php");

if(isset($_POST["signup"])){
        $username = $_POST["username"];
        $email = $_POST["email"] ;
        $password = $_POST["password"];
        $mobile = $_POST["mobile"] ;

    // set 
    $query = "INSERT INTO users SET username=? , password=? , mobile=? , eamil=?"

};