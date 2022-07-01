<?php
include "../config/config.php";
// fetching users=====================================================
   try {
   $query = "select * from `departement`;";
   $stmt = $connection->prepare($query);
   $stmt->execute();
   $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);
   } catch (PDOException $e) {
   echo "Error : ".$e->getMessage();
   }
// =====================================================================
$users=json_encode($tickets);//returns JSON string

//return JSON formatted data
echo($users);
?>