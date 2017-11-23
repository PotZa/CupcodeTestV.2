<?
$host = "localhost";
$user = "root";
$pass = "6953";
$dbname = "db_test";

$conndb = mysql_connect($host,$user,$pass) or die ("Error");
mysql_select_db($dbname,$conndb);

mysql_query("SET NAME UTF8");




?>