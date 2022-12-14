<?php
include 'conn.php';
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
        <button class='add'><a href='crud.php'>Add Content</a></button>
    </div>
    <div class="cardContent">
        <?php
        $sql="select * from `crud`";
        $result=mysqli_query($conn,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $title=$row['title'];
                $content=$row['content'];
                $author=$row['author'];
                echo'<div class="card">
                <div>
                    <span>'.$id.'</span>
                    <h3>'.$title.'</h3>
                </div>
                <div>
                    <p>'.$content.'</p>
                </div>
                <div>
                    <span>'.$author.'</span>
                </div>
                <div>
                <button><a href="edit.php?editid='.$id.'">EDIT</a></button>
                <button><a href="delete.php?deleteid='.$id.'">DELETE</a></button>
                </div>
            </div>';
            }
        }
        ?>
    </div>
</body>
</html>