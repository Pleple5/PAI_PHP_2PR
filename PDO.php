<?php
    try{
        $pol = new PDO('mysql:host=localhost;dbname=scamochody', 'root' , '')
        $po->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $zapytania = 'SELECT * FROM komis';
        $zap = $pol->query($zapytanie);
        echo '<table border=1>';
        echo '<tr>';
        echo '<th>Marka</th><th>Model</th><th>Cena</th>';
        echo '</tr>';
        while ($wiersz = $zap ->fetch())
        {
            echo '<tr>';
            echo '<td>.'.wiersz['marka'].'</td>'
            echo '<td>.'.wiersz['model'].'</td>'
            echo '<td>.'.wiersz['cena'].' pln</td>'
            echo '</tr>'
        }
        echo '</table>';
        $zap->closeCursor();
    }
    catch(PDOException $e){
        echo 'Błąd połączenia: '.$e->getMessage()
    };
?>