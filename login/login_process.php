<?php 
include("../temp/config.php");
if($_SERVER['REQUEST_METHOD' ] == 'POST') { 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $authority = $_POST['authority'];
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])){
          session_start();
          $_SESSION['username'] = $username;   
          $_SESSION['authority'] = $row['authority'];
          header("Location: ../home");
          exit();
        } else {
            echo "Parola yanlış.";
        }
    } else {
        echo "Girilen kullanıcı adı bulunamadı.";
    }
    $conn->close();
}
?>