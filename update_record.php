+<?php
 /* Attempt MySQL server connection. Assuming you are running MySQL
 +server with default setting (user 'root' with no password) */
 
 $link = mysqli_connect("localhost", "root", "root", "demo1");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
 
  
 // attempt insert query execution
 $sql = "UPDATE personsip SET first_name='Emily' WHERE last_name='Mirfin';";
 if(mysqli_query($link, $sql)){
     echo "Records added successfully.";
 } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 }
 // Close connection
 mysqli_close($link);
 ?> 
