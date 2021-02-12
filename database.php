<?php
$host = "localhost";
$dbUsername="root";
$dbPassword="";
$dbname="Crewgenerator";
$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>