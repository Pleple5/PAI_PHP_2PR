<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #fcc890;
        }
        .formularz{
            padding: 20px;
            border: 4px black solid;
            margin: auto;
            max-width: 20%;
            text-align: center;
            background-color: white;
            margin-top: 350px;
        }
    </style>
</head>
<body>
    <!-- Do formularza wprowadzamy login i hasło (password) wysyłamy formularz i skrypt sprawdza czy podaliśmu prawidłowy login hasła jak zły podany skrypt kieruje na strone bez komunikatu, jeżeli login poprawny skrypt przekierowuje na strone trzecią -->
    <form action=zad.php method=post class="formularz">
        Login: <input type=text name=login><br>
        Hasło: <input type=password name=haslo><br>
        <br><input type="submit" value="Wyślij">
        <input type="reset" value="Czyść dane">
    </from>
    <?phps
        if (isset($_POST['login']) && isset ($_POST['haslo']))
        {
            if (empty($_POST['login']) && empty ($_POST['haslo']))
            {
                exit();
            }
            else
            {
                header("Location: zad2.php");
            }
        }
        ?>
</body>
</html>