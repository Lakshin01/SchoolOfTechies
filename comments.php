 <?php

include "connection.php";
session_start();



if(isset($_POST['submit'])){ 

   $query = " INSERT INTO `comments`( `comment`, `email`, `username`)    VALUES('$comment', '$email', '$username')";
mysqli_query($db, $query);
} 

