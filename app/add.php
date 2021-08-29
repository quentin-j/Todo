<?php

if(isset($_POST['title']) || isset($_POST['task'])){
    require '../data/db_connect.php';
    $title = $_POST['title'];
    $task = $_POST['task'];
    if (empty($title)) {
        header("Location: ../form.php?mess=emptyTitle");
    }else {
        $sql = $connect->prepare("INSERT INTO todos(title, task) VALUE(:title, :task)");
        $insertedRow = $sql->execute([
            ':title' => $title,
            ':task' => $task
        ]);
        if($insertedRow){
            header("Location: ../form.php?mess=success");
        }else {
            header("Location: ../form.php");
        }
        $connect = null;
        exit();
    }
}else{
    header("Location: ../form.php?mess=emptyTitle");
}