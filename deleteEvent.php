<?php session_start();
if (!isset($_SESSION['user'])){
    if ($_SESSION['user' !== "Admin"]){
        header("Location: sign_in.php");
    }
}
include_once("dbc.php");

$sql = "Delete from events where eventTitle = \"".$_POST['title']."\"";
print_r($_POST);
try{
    $dbh->exec($sql);
    header("Location: events.php");
    die();
} catch (PDOException $e) {
    header("Location: events.php");
    die();
} ?>