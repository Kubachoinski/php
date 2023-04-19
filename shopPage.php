<?php
require_once"systemClass.php";
require_once"layoutClass.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
   SystemClass::printHead("./styles/main.css", "MyPage");
   ?>
</head>
<body>
    <?php
        // LayoutClass::printHeader();
        LayoutClass::getProducts();
        ?>
<footer>
    <?php
        LayoutClass::printFooter();
        ?>
</footer>
</body>
</html>