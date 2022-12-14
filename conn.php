<?php
$conn = new mysqli('localhost','root','','iseng');
if(!$conn){
    die(mysqli_error($conn));
}
?>