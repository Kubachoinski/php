<?php
    require_once"systemClass.php";
    require_once"layoutClass.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <?php
    SystemClass::printHead("./styles/main.css", "Moja strona");
    ?>
</head>
<body>
    <?php 
    layoutClass::printHeader(); 
    ?>

    <section class="hero">
        <div class="hero__container">
            <h1>Witam</h1>
        <button href="google.com">Kliknij we mnie</onclick=>
        </div>
    </section>

    <div class="space"></div>
    <div class="carts">
        <div class="carts__container"><p>Test</p></div>
        <div class="carts__container"><p>Test</p></div>
        <div class="carts__container"><p>Test</p></div>
    </div>

    <div class="space"></div>
    <?php 
    LayoutClass::printFooter(); 
    ?>
</body>

</html>


</body>
</html>