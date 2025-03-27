<?php 
require_once '../temp/gologin.php';
require_once '../temp/menu.php';  
?>

    <div class="content" style="margin-left: 20px;">
    <h1>Şifre Değiştirme</h1><br>
    <form action="passchange.php" method="POST" >
        <div class=" form-group text-left">
            <label for="yeni_sifre">Yeni Şifre:</label>
            <input type="password" class="form-control" name="yeni_sifre" required>
        </div>
        <div class=" form-group text-left">
            <label for="yeni_sifre_tekrar">Yeni Şifre Tekrar:</label>
            <input type="password" class="form-control" name="yeni_sifre_tekrar" required>
        </div>
        <button type="submit" class="btn btn-primary">Şifreyi Değiştir</button>
    </form>
    </div>
<?php 
        require_once '../temp/footer.php';
     ?>