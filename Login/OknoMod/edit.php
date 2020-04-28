<?php

    session_start();
    require_once "connect.php";        
    $conn = @new mysqli($host, $db_user, $db_password, $db_name);  

    if ($conn->connect_errno!=0)              
    {
        echo "Error: ".$conn->connect_errno;    
    }
    else
        {   

            $ma = $_POST['marka'];
            $mo = $_POST['model'];
            $pr = $_POST['przebieg'];
            $ro = $_POST['rocznik'];
            $ko = $_POST['kolor'];
            $ub = $_POST['ubezpieczenie'];

        if ($conn->query("UPDATE auta SET marka='$ma', model='$mo', przebieg='$pr', rocznik='$ro', kolor='$ko', ubezpieczenie='$ub' WHERE idauta=3"))
    
      header('location: pokaz.php');
        }
?>
