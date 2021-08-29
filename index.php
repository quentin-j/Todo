<?php
    require 'data/db_connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>TODO</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="container">
        <h1>TODO</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="unactive">
                    <a href="#">New task</a>
                </li>
                <li class="active">
                    <a href="index.php">TODO list</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <h2>TODO list</h2>

        <ul class="list-group">
             <li class="list-group-item">
                <input  class="form-check-input check-box" type="checkbox" id="flexSwitchCheckChecked"  />
                <span>hard-coded todos unchecked<span>
                <a href="#" class="btn btn-primary">See more</a>   
            </li>
            <?php
                $todos = $connect->query("SELECT * FROM todos ORDER BY checked ASC, id DESC;");
            ?>
            <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) {?>
                <li class="list-group-item">
                        <?php if($todo['checked']){ ?>
                            <input class="form-check-input check-box"
                                type="checkbox"  
                                checked />
                           <span class="checked"><?php echo $todo['title'] ?></span>
                        <?php }else{ ?>
                            <input class="form-check-input check-box" 
                                type="checkbox" />
                            <span><?php echo $todo['title'] ?></span>
                        <?php } ?>
                        <a href="#" class="btn btn-primary">See more</a>
                </li>
            <?php }?>
            <li class="list-group-item">
                <input  class="form-check-input check-box" type="checkbox" checked  />
                <span class="checked">hard-coded todos check</span>   
                <a href="#" class="btn btn-primary">See more</a>
            </li>
        </ul>

    </main>
</body>

</html>