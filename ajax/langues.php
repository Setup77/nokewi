<?php
header("Content-Type: text/html; charset=utf-8");
header('Pragma: no-cache');
header('Cache-Control: no-cache');
session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $_SESSION['languedusite'] =$_POST['Idlangue']; 
 $_SESSION['FichierduLangue'] = $_POST['FichierLangue']; 
      
    }
    else{
           header("Location:../");
    }
