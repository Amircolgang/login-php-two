<?php
require_once("../config/loader.php");

if(isset($_POST["signin"])){
    try {
        // دریافت داده‌های فرم
        $key = $_POST["key"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // هش کردن رمز عبور
       
        
        // بررسی مقادیر ضروری
        if(empty($username) || empty($email) || empty($_POST["password"]) || empty($mobile)) {
            throw new Exception("تمام فیلدها باید پر شوند");
        }
        
        // بررسی فرمت ایمیل
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("فرمت ایمیل نامعتبر است");
        }

        // آماده‌سازی کوئری
        $query = "SELECT ";
        
        // اجرای کوئری
        $stmt = $conn->prepare($query);
        $stmt->bindValue(1, $username);
        $stmt->bindValue(2, $password);
        $stmt->bindValue(3, $mobile);
        $stmt->bindValue(4, $email);
        $stmt->execute();

        echo "حساب کاربری با موفقیت ایجاد شد";
        header("location: ../index.php");
    } catch (PDOException $e) {
        echo "خطا در ثبت نام: " . $e->getMessage();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>