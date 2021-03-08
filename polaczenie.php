<?php

$host="localhost";
$username="root";
$password="";
$dbname="maksymilianrembiasz";
$port=3306;

$polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);
if(mysqli_connect_errno()!=0){
    echo("Błąd połączenia do bazy danych");
}
?>