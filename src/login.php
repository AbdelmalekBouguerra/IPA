<?php
   session_start();
   include "config/config.php";
   $msg = ""; 
   if(isset($_POST['Login'])) {
   $username = trim($_POST['username']);
   $password = trim($_POST['password']);
   if($username != "" && $password != "") {
      try {
         $query = "select * from `users` where `userName`=:username and `userPassword`=:password";
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