<?php
$conn = new mysqli('localhost','root','','journal');
if(!$conn){
    die(mysqli_error($conn));
}
?>