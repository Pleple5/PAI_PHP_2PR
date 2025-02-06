<?php
    $a=5;
    $b=20;
    $c=123;

    // zapis do pliku
    $plikb=fopen("dane.dat","w+b");
    fwrite($plikb,$a);
    fwrite($plikb,$b);
    fwrite($plikb,$c);
    fclose($plikb);

    //odczyt z pliku
    $plikb=fopen("dane.dat","rb");
    $xx=fread($plikb,4);
    echo "<br>Pozycja pliku dane.dat: ".ftell($plikb)."<br>";
    echo "<br> $xx*2=".($xx*2)."<br>";
    fseek($plikb,3); //zamiana pozycji pliku
    $yy=fread($plikb,1);
    echo "<br>yy=".$yy."<br";
    fclose($plikb);

    // zapis tablicy do pliku do serializacji
    for($j=0;$j<1000;$j++) $tab1[$j]=rand(1,1000);
    $a=serialize($tab1);
    echo "<br>".$tab1[10];
    file_put_contents("tablica2.dat", $a);

    //odczyt tablicy z pliku i deserializacja
    $tab2=unserialize(file_get_contents("tablica2.dat"));
    echo "<br>".$tab2[10];
?>