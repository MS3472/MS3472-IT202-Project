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
<head>
    <title>Inventory Helper Login</title>
    <script language="javascript" type="text/javascript">
   function getRealTime() {
       
       var domcategories = document.getElementById("categorycount");
       var domitems = document.getElementById("itemcount");
       var domlistpricetotal = document.getElementById("listpricetotal");
       var domwholesaletotal = document.getElementById("wholesaletotal"); 

       var request = new XMLHttpRequest();
       request.open("GET", "realtime.php", true);
       request.onreadystatechange = function() {
           if (request.readyState == 4 && request.status == 200) {
               var xmldoc = request.responseXML;
               var xmlcategories = xmldoc.getElementsByTagName("categories")[0];
               var categories = xmlcategories ? xmlcategories.childNodes[0].nodeValue : "0";
               var xmlitems = xmldoc.getElementsByTagName("items")[0];
               var items = xmlitems ? xmlitems.childNodes[0].nodeValue : "0";
               var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
               var listpricetotal = xmllistpricetotal ? xmllistpricetotal.childNodes[0].nodeValue : "0.00";
               var xmlwholesaletotal = xmldoc.getElementsByTagName("wholesaletotal")[0]; 
               var wholesaletotal = xmlwholesaletotal ? xmlwholesaletotal.childNodes[0].nodeValue : "0.00";
               domcategories.innerHTML = categories;
               domitems.innerHTML = items;
               domlistpricetotal.innerHTML = listpricetotal;
               domwholesaletotal.innerHTML = wholesaletotal; 
           }
       };
       request.send();
   }
</script>
</head>
<body>
    <header>
        <?php include("header.inc.php"); ?>
    </header>
    <section style="height: 425px;">
        <nav style="float: left; height: 100%;">
            <?php include("nav.inc.php"); ?>
        </nav>
        <section id="container">
            <main>
                <?php
                if (isset($_REQUEST['content'])) {
                    include($_REQUEST['content'] . '.inc.php');
                } else {
                    include('main.inc.php');
                }
                ?>
            </main>
            <aside>
                <?php include("aside.inc.php"); ?>
                <script language="javascript" type="text/javascript">
                    getRealTime();
                    setInterval(getRealTime, 5000);
                </script>
            </aside>
        </section>
    </section>
    <footer>
        <?php include("footer.inc.php"); ?>
    </footer>
</body>
</html>
