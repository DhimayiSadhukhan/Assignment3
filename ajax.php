<?php

$con=mysqli_connect("localhost","root","","person");
if(isset($_REQUEST["fname"])){
$reg="^".$_REQUEST["fname"];

$query="select first_name from info where first_name regexp '$reg'";
$res=mysqli_query($con,$query);
$out=mysqli_fetch_all($res, MYSQLI_ASSOC);
echo json_encode($out);
}

if(isset($_REQUEST["ip"])){

    $text=$_REQUEST["ip"];
    
    $query="select * from info where first_name='$text'";
    $res=mysqli_query($con,$query);
    $out=mysqli_fetch_all($res, MYSQLI_ASSOC);
    echo json_encode($out);
    
    }
?>