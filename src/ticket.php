<?php
   include "config/config.php";
   // fetching tickets
   try {
         $query = "select * from `ticket` where `idUser`=:id";
         $stmt = $connection->prepare($query);
         $stmt->bindParam('id', $_SESSION['sess_user_id'], PDO::PARAM_STR);
         $stmt->execute();
         $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
         echo "Error : ".$e->getMessage();
      }
      
?>