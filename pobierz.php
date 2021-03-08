<?php

/**
 * skrypt pobiera wszystkie rekordy z bazy danych
 * korzystam z dwóch metod : list mysqli fetch array
 */
    include_once("polaczenie.php");

    $zapytanie_SELECT = $polaczenie->query("SELECT idn,nazwa FROM nazwa;");
    
    
    while (list($idn,$mojaNazwa)=mysqli_fetch_array($zapytanie_SELECT)){
        echo("
            IDN: $idn , NAZWA: $mojaNazwa <br>
        ");
    }


    $polaczenie->close();
?>