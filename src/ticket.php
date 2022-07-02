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

      // fetching $openCount=====================================================
      try {
      $query = "SELECT COUNT(status) FROM ticket WHERE idUser =:id AND status =\"open\"";
      $stmt = $connection->prepare($query);
      $stmt->bindParam('id', $_SESSION['sess_user_id'], PDO::PARAM_STR);
      $stmt->execute();
      $openCount = $stmt->fetch(PDO::FETCH_ASSOC);
      $openCount = $openCount['COUNT(status)'];
      } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
      }
      // =====================================================================

      // fetching $closeCount=====================================================
      try {
      $query = "SELECT COUNT(status) FROM ticket WHERE idUser =:id AND status =\"closed\"";
      $stmt = $connection->prepare($query);
      $stmt->bindParam('id', $_SESSION['sess_user_id'], PDO::PARAM_STR);
      $stmt->execute();
      $closeCount = $stmt->fetch(PDO::FETCH_ASSOC);
      $closeCount = $closeCount['COUNT(status)'];
      } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
      }
      // =====================================================================
   
      if(isset($_POST['type-ticket'])) {
         $typeTicket = trim($_POST['type-ticket']);
         $desc = trim($_POST['desc']);
         // turn array to string divided by ","
         $materiels = implode(",", $_POST['materiel']);
         try {
            $query = "INSERT INTO ticket(typeTicket,idUser,materiel,descriptionTicket)
            VALUES(:typeTicket,:id,:materiel,:desc)";
            $stmt = $connection->prepare($query);
            $stmt->bindParam('typeTicket', $typeTicket, PDO::PARAM_STR);
            $stmt->bindParam('materiel', $materiels, PDO::PARAM_STR);
            $stmt->bindParam('desc', $desc, PDO::PARAM_STR);
            $stmt->bindValue('id', $_SESSION['sess_user_id'], PDO::PARAM_INT);
            $stmt->execute();
            header("Refresh:0");
         } catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
         }
      }