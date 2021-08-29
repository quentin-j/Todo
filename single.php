<?php
    include 'header.php';
    include 'header2.php';
?>

<?php
        $todoId = (int) $_GET['id'];
        //echo $todoId;
        $find = $connect->prepare("SELECT * FROM todos WHERE id=?");
        $find->execute([$todoId]);
        $todo = $find->fetch();
        if ($todo) { ?>
                <div><label>Task name :</label><?php echo ' '.$todo['title'] ?></div>
                <div><label>Description :</label><?php echo ' '.$todo['task'] ?></div>
                <div><label>Status :</label><?php 
                
                    if($todo['checked'] == 0){
                        echo " incomplete";
                    }else {
                        echo " complete";
                    }?>
                
                </div>
        <?php } else {
            header('Location: 404.php?id='.$todoId.'notExist');
        } 

    include 'footer.php';