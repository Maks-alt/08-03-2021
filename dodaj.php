<?php
/**
 * Dokument odbierający zmienną 'nazwa jako super globalną tablice: $_POST['nazwa];
 * Dokument dodaje do bazy danych Mysqli: INSERT INTO
 */
include_once("polaczenie.php");
/** 
*$nazwa = $_POST['nazwa'];
*echo("
*$nazwa <br>
*");
*/
$nazwa = $_POST['nazwa'];
echo("Moja Nazwa: ".$_POST['nazwa']."<br>");

$zapytanie_insert = $polaczenie->query("INSERT INTO nazwa(nazwa) values('$nazwa')");


$polaczenie->close();
?>