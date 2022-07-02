<?php
   session_start();
   include "config/config.php";
   $msg = ""; 
   if(isset($_POST['Login'])) {
   $username = trim($_POST['username']);
   $password = trim($_POST['password']);
   if($username != "" && $password != "") {
      try {
         $query = "select * from `users`,`service` where `userName`=:username and `userPassword`=:password and users.idService = service.idService;";
         $stmt = $connection->prepare($query);
         $stmt->bindParam('username', $username, PDO::PARAM_STR);
         $stmt->bindValue('password', $password, PDO::PARAM_STR);
         $stmt->execute();
         $count = $stmt->rowCount();
         $row   = $stmt->fetch(PDO::FETCH_ASSOC);
         if($count == 1 && !empty($row)) {
         /******************** Your code ***********************/
         $_SESSION['sess_user_id']   = $row['id'];
         $_SESSION['sess_user_name'] = $row['userName'];
         $_SESSION['nom'] = $row['nom'];
         $_SESSION['prenom'] = $row['prenom'];
         $_SESSION['libelleService'] = $row['libelleService'];

         header('location:home.php');
         } else {
            $msg = "Invalid username and password!";
            
         }
      } catch (PDOException $e) {
         echo "Error : ".$e->getMessage();
      }
   } else {
      $msg = "Both fields are required!";
   }
}
?>