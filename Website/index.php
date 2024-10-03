<?php
//ms3472
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Inventroy helper login</title></head>
<body>
    <h1> Welcome to the Portable Powerbank Inventroy website </h1>
    <section id = "container">
        <main>
            <?php
            if(isset($_REQUEST['content'])){
                include($_REQUEST['content'] .'.inc.php');
            }
            else {
                include ('main.inc.php');
            }
            ?>
        </main>

    </section>
</body>
</html>