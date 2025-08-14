<?php
require_once("../config/loader.php");

if(isset($_POST["signin"])){
    try {
        // دریافت داده‌های فرم
        $key = $_POST["key"];
        $password =$_POST["password"]; // هش کردن رمز عبور
       
        
        // بررسی مقادیر ضروری
        if(empty($username) || empty($email) || empty($_POST["password"]) || empty($mobile)) {
            throw new Exception("تمام فیلدها باید پر شوند");
        }
        
        // بررسی فرمت ایمیل
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("فرمت ایمیل نامعتبر است");
        }

        // آماده‌سازی کوئری
        $query = "SELECT users WHERE (username = :key OR mobile = :key OR email = :key ) AND (password = :password)";
        
        // اجرای کوئری
        $stmt = $conn->prepare($query);
        $stmt->bindValue(":key", $key);
        $stmt->bindValue(":password", $password);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        

        var_dump($result)
        // header("location: ../index.php");
    } catch (PDOException $e) {
        echo "خطا در ثبت نام: " . $e->getMessage();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>