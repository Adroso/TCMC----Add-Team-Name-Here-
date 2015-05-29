<?php session_start();
if (!isset($_SESSION['user'])){
    if ($_SESSION['user' !== "Admin"]){
        header("Location: sign_in.php");
    }
}
include_once("dbc.php");

$title1 = $_POST['title1'];
$title2 = $_POST['title2'];
$desc = $_POST['desc'];
$picture = $_POST['picture'];
$link = $_POST['link'];
if ($title1 == ""){$title1 = null;}
if ($title2 == ""){$title2 = null;}
if ($desc == ""){$desc = null;}
if ($picture == ""){$picture = null;}
if ($link == ""){$link = null;}

    
$sql = "Insert into events ('eventTitle', 'eventSecondTitle', 'eventDesc', 'eventPicture', 'eventTicketShop') Values (\"".$title1."\", \"".$title2."\", \"".$desc."\", \"".$picture."\", \"".$link."\")";
echo $sql;
try{

    $dbh->exec($sql);
    header("Location: events.php");
    die();
} catch (PDOException $e) {
    header("Location: events.php");
    die();
} ?>