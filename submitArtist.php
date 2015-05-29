<?php session_start();
include_once("dbc.php");
if (strlen($_GET['artistName']) == 0){header("Location: addArtist.php");
    die();}

$sql = "Insert into artists ('artistname', 'artistInfo', 'artistSummary', 'artistWebsite', 'artistContact', 'artistPicture')
Values (\"" .$_GET['artistName']."\", \"".$_GET['artistInfo']."\", \"".$_GET['artistSummary']."\", \"".$_GET['artistWebsite']."\", \"" .$_GET['artistContact']."\", \"".$_GET['artistPicture']."\")";
echo $sql;
try{

    $dbh->exec($sql);
    header("Location: index.php");
    die();
} catch (PDOException $e) {
    header("Location: addEditArtist.php");
    die();
} ?>