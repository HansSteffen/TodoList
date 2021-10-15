<?php

if(isset($_POST['TaskName'])){
    require '../db_conn.php';

    $title = $_POST['TaskName'];
   

    if(empty($title)){
        header("Location: ../index.php?mess=error");
    }else {
        $stmt = $conn->prepare("INSERT INTO task(TaskName) VALUE(?)");
        $res = $stmt->execute([$title]);

        if($res){
            header("Location: ../index.php?mess=success"); 
        }else {
            header("Location: ../index.php");
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ../index.php?mess=error");
}

if(isset($_POST['TaskDescriptio'])){
    require '../db_conn.php';

    $title = $_POST['TaskDescription'];
   

    if(empty($title)){
        header("Location: ../index.php?mess=error");
    }else {
        $stmt = $conn->prepare("INSERT INTO task(TaskDescriptio) VALUE(?)");
        $res = $stmt->execute([$title]);

        if($res){
            header("Location: ../index.php?mess=success"); 
        }else {
            header("Location: ../index.php");
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ../index.php?mess=error");
}
