<?php
    include 'header.php';
?>
 <li class="unactive">
                    <a href="form.php">New task</a>
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
            <?php
                $todos = $connect->query("SELECT * FROM todos ORDER BY checked ASC, id DESC;");
            ?>
            <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) {?>

                <li class="list-group-item">
                <div class="form-check form-switch">
                    <?php if($todo['checked']){ ?>
                            <input class="form-check-input check-box" 
                                type="checkbox" 
                                data-todo-id = "<?php echo $todo['id'] ?>"
                                checked />

                            <span class="checked"><?php echo $todo['title'] ?></span>

                            <a href="single.php?id=<?php echo $todo['id'] ?>" class="btn btn-info right">See more</a>
                        
                            <?php }else{ ?>

                            <input class="form-check-input check-box" 
                                type="checkbox" 
                                data-todo-id = "<?php echo $todo['id'] ?>" />

                            <span><?php echo $todo['title'] ?></span>

                            <a href="single.php?id=<?php 
                            if(isset($todo['id'])){
                            echo $todo['id'] ;
                            }else{
                                header('Location: 404.php');
                            }
                            ?>" class="btn btn-info right">See more</a>

                            <?php } ?>
                    </div>
                </li>
            <?php }?>
        </ul>
        <form>
            <input Type="button" value="Reorganize" class="btbn btn-warning reorganize" onClick="history.go(0)">
        </form>
    </main>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".check-box").click(function(e){
                const id = $(this).attr('data-todo-id');
                
                $.post('app/check.php',
                {
                    id: id
                },
                (data) => {
                   if(data != 'error'){
                       const span = $(this).next();
                       if(data === '1'){
                           span.removeClass('checked');
                       }else {
                            span.addClass('checked');
                       }
                   }
                }
                );
            });
        });
    </script>
</body>

</html>