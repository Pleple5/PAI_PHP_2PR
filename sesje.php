<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['n'] = "200";
        $n=$_SESSION['n'];
        echo "<br>Na stronie sesja.php n=$n<br>";
        echo "<a href=sesje2.php>Do strony sesje2.php</a>";
    ?>
</body>
</html>