<?php
     //Connect to the database
    $host = "127.0.0.1";
    $user = "root";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "c9";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306


 $person =$_POST['friends'];
 //$personId = substr($person, 1);
 $len = strlen($personId);
 //echo strlen($personId);
 $page="Valentina";
 //print $personId;
 header("Location:https://lit-tunes-yangyandd.c9users.io/$person.php");
 ?>