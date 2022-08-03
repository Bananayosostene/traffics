<?php
$server = "localhost";
$user ="root";
$pass ="";
$db ="students";
$con=mysqli_connect($server,$user,$pass,$db);
if($con){
        echo "byakunze";
    }
     else{
        echo "ntibyakunze".mysqli_error($con);
     }




     
?>