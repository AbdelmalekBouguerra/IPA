<?php

include "../config/config.php";
// fetching users=====================================================
   session_start();
   try {
   if ($_SESSION["userRole"] == 'directeur'){
      $val = 'open';
   } else{
      $val = 'valide';
   }
   $query = "SELECT t.id, u.nom, u.prenom,t.status, t.descriptionTicket, t.typeTicket FROM ticket as t, users as u WHERE status =:val and t.idUser = u.id;";
   $stmt = $connection->prepare($query);
   $stmt->bindParam('val', $val, PDO::PARAM_STR);
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