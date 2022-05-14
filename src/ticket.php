<?php
   include "config/config.php";
   // fetching $tickets=====================================================
   try {
         $query = "select * from `ticket` where `idUser`=:id";
         $stmt = $connection->prepare($query);
         $stmt->bindParam('id', $_SESSION['sess_user_id'], PDO::PARAM_STR);
         $stmt->execute();
         $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
         echo "Error : ".$e->getMessage();
      }
   // =====================================================================
   
      if(isset($_POST['type-ticket'])) {
      $typeTicket = trim($_POST['type-ticket']);
      $desc = trim($_POST['desc']);
         try {
            $query = "INSERT INTO ticket(typeTicket,idUser) VALUES(:typeTicket,:id)";
            $stmt = $connection->prepare($query);
            $stmt->bindParam('typeTicket', $typeTicket, PDO::PARAM_STR);
            $stmt->bindValue('id', $_SESSION['sess_user_id'], PDO::PARAM_INT);
            $stmt->execute();
            echo 'debug';
         } catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
         }
}else{
   echo 'type vide';
}