<?php
session_start();

// Pastikan variabel $commentError dan $isFormValid dideklarasikan
$commentError = '';
$isFormValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek apakah key 'comment' ada di dalam array $_POST
    if (isset($_POST['comment'])) {
        $comment = $_POST['comment'];
        if (empty($comment)) {
            $commentError = 'Komentar harus diisi!';
            $isFormValid = false;
        }
        
        if ($isFormValid) {
            $_SESSION['bukutamu'] = [
                'email' => $_SESSION['email'],
                'nama' => $_SESSION['nama'],
                'comment' => $comment
            ];
            header('Location: loginsukses.php');
            exit();
        }
    } else {
        $commentError = 'Komentar tidak ditemukan!';
        $isFormValid = false;
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet"  href="style.css">
    
</head>
<body>

<div class="bukutamu-form">
    <form method = 'post'>
    <h2>Buku Tamu</h2>
        <div class="input-field">
        <div class="input-field">
            <label for="comment">Komentar:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            <div class="error"><?php echo $commentError; ?></div>
        </div>
        <button type="submit" class="submit-button">Kirim</button>
    </form>

    <?php

    if (isset($_SESSION["email"])) { 
    ?>

        <form method="post" action="log-out.php">
            <div class="input">
                <button type="submit" class="button-logout">LOGOUT</button>
            </div>
        </form>

    <?php
    }
    
    if (isset($_SESSION['bukutamu'])) {
        echo '<p>Nama : ' . ($_SESSION['bukutamu']['nama']) . '</p>';
       
        echo '<p>Email : ' . ($_SESSION['bukutamu']['email']) . '</p>';
        
        echo '<p>Komentar: ' . ($_SESSION['bukutamu']['comment']) . '</p>';
        unset($_SESSION['bukutamu']);
    }
    ?>
</div>

</body>
</html>