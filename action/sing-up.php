<?php

require_once("../config/loader.php");

if(isset($_POST["signup"])){
    try {
            $username = $_POST["username"];
        $email = $_POST["email"] ;
        $password = $_POST["password"];
        $mobile = $_POST["mobile"] ;

    // set 
    $query = "INSERT INTO users SET username=? , password=? , mobile=? , eamil=?";

    // stmt 
    $stmt = $conn->prepare($query);

    // bind
    $stmt->bindValue(1, $username);
    $stmt->bindValue(2, $password);
    $stmt->bindValue(3, $mobile);
    $stmt->bindValue(4, $email);

    // exe
    $stmt->execute();

    echo "Created"
    } catch (\Throwable $th) {
      
    }
   

};