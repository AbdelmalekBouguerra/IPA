<?php
$host     = "localhost";//Ip of database, in this case my host machine    
$user     = "root";	//Username to use
$pass     = "10320";//Password for that user
$dbname   = "ipa";//Name of the database
try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
  echo $e->getMessage();                         
}

?>