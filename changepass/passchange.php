<?php 
include("../temp/config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $_POST['yeni_sifre'];
    $new_password_repeat = $_POST['yeni_sifre_tekrar'];

    if($new_password == $new_password_repeat){
        $user_id = $_SESSION['username'];
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        $sql = "UPDATE users SET password = ? WHERE username = ?";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $hashed_password, $user_id);

        if($stmt->execute()){
            echo "Şifre başarıyla değiştirildi.";
        } else{
            echo "Şifre değiştirilirken bir hata oluştu.";
        }
    } else{
        echo "Şifreler uyuşmuyor.";
    }
} 
?>