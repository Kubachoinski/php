<?php

class SystemClass {
    static function printHead($stylesPath, $title="Sklep internetowy") {
        echo "
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>$title</title>
            <link rel='stylesheet' href='$stylesPath'>
        ";
    }

    public static function dbConnect() {
        require_once"config.php";
        return new mysqli($host, $db_user, $db_password, $db_name);
    }

    public static function blockEntraceNotSigned($move_to) {
        if(!isset($_SESSION['signedIn'])) {
            header("Location: $move_to");
        }
    }

    public static function blockEntraceSigned($move_to) {
        if(isset($_SESSION['signedIn'])) {
            header("Location: $move_to");
        }
    }
}