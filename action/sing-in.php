<?php
require_once("../config/loader.php");
if (isset($_POST["signin"])) {
    try {
        $key = $_POST["key"];
        $password = $_POST["password"];

        $query = "SELECT * FROM users WHERE (username = :key OR mobile = :key OR email = :key) and (password = :password)";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(":key", $key);
        $stmt->bindValue(":password", $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        var_dump($user);
        // if ($user && password_verify($password, $user["password"])) {
        //     echo "Login successful!";
        //     // header("Location: ../index.php");
        // } else {
        //     echo "Invalid credentials.";
        // }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

?>