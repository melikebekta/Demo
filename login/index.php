<?php 
require_once '../temp/gohome.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('../image/background.jpg') no-repeat center center/cover;
            opacity: 0.7; 
            z-index: -1; 
        }

        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 350px; 
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Giriş Yap</h2>
        <form action="login_process.php" method="POST">
        <div class="form-group text-left">
        <label>Kullanıcı Adı:</label>
        <input type="text" class="form-control" name="username" required>
    </div>
        <div class="form-group text-left">
            <label>Parola:</label>
            <input type="password" class="form-control" name="password" required>
        </div>
            <button type="submit" class="btn btn-primary">Giriş Yap</button> 
        </form>
        <p>Hala kayıt olmadın mı? <a href="../register">Buraya Tıkla</a></p>
    </div>
</body>
</html>
