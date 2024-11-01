<?php
//ms3472
//10/04/2024
//IT202-MC
//Phase 1 
//MS3472@njit.edu
session_start();
include("portablepowerbankcategory.php");
include("portablepowerbankproduct.php");
?>
<!DOCTYPE html>
<html>
<head><title>Inventroy helper login</title></head>
<body>
<header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 425px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>
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
    <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>