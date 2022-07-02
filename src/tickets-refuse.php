<?php
include "../config/config.php";
// fetching users=====================================================
   try {
   $query = "SELECT t.id, u.nom, u.prenom,t.materiel,t.status,t.motifRefus, t.descriptionTicket, t.typeTicket FROM
   ticket as t,
   users
   as u WHERE
   status = 'refuse' and t.idUser = u.id;";
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