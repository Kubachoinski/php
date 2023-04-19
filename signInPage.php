<?php
    session_start();
    require_once"systemClass.php";
    // systemClass::blockEntranceNotSigned("index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php SystemClass::printHead("./styles/signInPage.css", "Zaloguj się") ?>
</head>
<body>
    <form action="signIn.php" method="post">
        <label>E-mail</label>
        <input type="email" name="email" id="" />
        <label>Password</label>
        <input type="password" name="password" id="" />
        <input type="submit" value="Zaloguj się" />
    </form>
    <?php
        if(isset($_SESSION['signInError'])) {
            echo "<p class='blueColor' style='color: red'>Niepoprawny login lub hasło!</p>";
        }
    ?>
</body>
</html>