<?php

    session_start();
    require_once "connect.php";        
    $conn = @new mysqli($host, $db_user, $db_password, $db_name);  

    if ($conn->connect_errno!=0)              
    {
        echo "Error: ".$conn->connect_errno;    
    }
    else



    if ($rez = $conn->query("SELECT * FROM auta
    WHERE idauta=3"))                                                                                            

    $ilu = $rez->num_rows;

    if($ilu>0)                  
    {                     
    $wiersz = $rez->fetch_assoc();              
    $_SESSION['mar'] = $wiersz['marka'];                
    $_SESSION['mod'] = $wiersz['model']; 
    $_SESSION['prz'] = $wiersz['przebieg'];               
    $_SESSION['rok'] = $wiersz['rocznik'];               
    $_SESSION['kol'] = $wiersz['kolor'];               

    $rez->close();    
    
     header('location: star.php');
    }        

$conn->close();

?>