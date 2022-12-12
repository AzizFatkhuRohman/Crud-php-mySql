<?php
include 'conn.php';
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $content=$_POST['content'];
    $author=$_POST['author'];
    $sql="insert into `crud` (title,content,author) values ('$title','$content','$author')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"Data Berhasil Di Upload";
    }else{
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
    
</head>
<body>
<div class='button'>
        <button class='add'><a href='home.php'>Home</a></button>
    </div>
    <form method=post>
        <div class="formGroup">
            <input type="text"placeholder="Title" name='title'>
        </div>
        <div class="formGroup">
            <textarea name="content" id="" cols="50" rows="7" placeholder="Content" name='content'></textarea>
        </div>
        <div class="formGroup">
            <input type="text" placeholder="Author" name='author'>
        </div>
        <div>
            <button class='submit' type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>
</html>