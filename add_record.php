+<?php
 /* Attempt MySQL server connection. Assuming you are running MySQL
 +server with default setting (user 'root' with no password) */
 
 $link = mysqli_connect("localhost", "root", "root", "demo1");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
 
  
 // attempt insert query execution
 $sql = "INSERT INTO personsip (first_name, last_name, gender, ip_address) VALUES ('Sijia', 'Liang', 'Female', '206.149.161.50')";
 if(mysqli_query($link, $sql)){
     echo "Records added successfully.";
 } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 }
 // Close connection
 mysqli_close($link);
 ?> 
