<?php

$username = "root";
$password = "";
$server = "localhost";
$database = 'trash';


$con = mysqli_connect($server,$username,$password,$database);

if($con){
     echo "connection successful";

}else{
    // echo "no connection";
    die("not connected" . mysqli_conect_error());
}


?>