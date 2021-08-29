<?php
include 'header.php';
?>
                <li class="active">
                    <a href="form.php">New task</a>
                </li>
                <li class="unactive">
                    <a href="index.php">TODO list</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container">
    <h2>New task</h2>
    
        <form action="app/add.php" method="POST" autocomplete="off" class="form">
            <div>
                <?php if(isset($_GET['mess']) && $_GET['mess'] == 'emptyTitle') {?>
                    <input type="text" name="title" placeholder="this field is required" class="form-control p-2 is-invalid" required>
                    <?php }else { ?>
                    <input type="text" name="title" placeholder="What do want to do ?" class="form-control p-2" >
                    <?php } ?>
                <textarea name="task" cols="20" rows="5" placeholder="description" class="form-control p-2"></textarea>
                <input type="submit" name="add" value="Add new task" class="form-control p-2 btn btn-primary">
            </div>
        </form>

    </main>
</body>

</html>