<?php

SESSION_START();

include "../../db.php" ;

$user_id =  $_SESSION['user_id'] ;

$data = "UPDATE emmak0_user SET status = 'offline' WHERE id = '$user_id' ";
$data1 = mysqli_query ($me, $data) ; 


SESSION_DESTROY(); 

header('location:../../Emmako/login.php');




?>