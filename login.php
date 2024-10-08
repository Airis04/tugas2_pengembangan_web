<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
<div align="center" class="container"></div>   
    <?php 
    if(isset($_GET["login gagal"])){
    ?>
    <div class="notifikasi">login gagal <br> email atau password</div>
    <?php
}
?>  
    <div class="login-form">
    <form method= "post" action="loginsukses.php">
        <div class="input">
                <label for="email" class="tag-email"><b>email</b></label>
                <input type="email" class="element-input" name="email" placeholder="email" required>
        </div>
        <div class="input">
                <label for="password"><b>password</b></label>
                <input type="password" class="element-input" name="password" placeholder="password" required>
        </div>
        <div class="input">
                <div align="rigth"><button type="submit" name="login" class="button-login">submit</button></div>
        </div>
        </form>
    </div>
        <br>
</div>
</body>
</html>