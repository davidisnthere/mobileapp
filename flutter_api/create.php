<?php
header('Content-Type: application/json');
include('db.php');

    $title = $_POST['title'];
    $desic = $_POST['desic'];
    $result = mysqli_query($db,"INSERT INTO smart_posts (title, desic) VALUES ('{$title}','{$desic}')");
    if($result)
    {
        echo json_encode("Success");
    }
    else{
        echo json_encode("Failed");
    }
?>
