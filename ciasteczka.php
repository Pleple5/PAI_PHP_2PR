<?php
    setcookie('nazwa', '1');
    setcookie('nazwa', '1', time()+3600*24);
    // echo time(); //sek od 01.01.1970

    //var_dump($_COOKIE);
    if(isset($_COOKIE['abcd']))
        echo "Ciasteczko istnieje";
    else
    {
        echo "Ustaiwam ciasteczko o nazwie abcd";
        setcookie('abcd', 'cos', time()+5);
    }

    setcookie ("nowe100", "100", [
        'expires' => time() +86400,
        'path' => '/',
        'domain' => 'localhost',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Strict'
    ])
?>