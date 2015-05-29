<?php session_start();
include_once("dbc.php");
$sql = "select * from artists where artistID=$_POST[id]";
$result=$dbh->query($sql);
foreach($result as $row){
    $name = $row['artistName'];
    $info = $row['artistInfo'];
    $summary = $row['artistSummary'];
    $site = $row['artistWebsite'];
    $picture = $row['artistPicture'];
    $contact = $row['artistContact'];
}
$gan = $_POST['artistName'];
$gai = $_POST['artistInfo'];
$gas = $_POST['artistSummary'];
$gac = $_POST['artistContact'];
$gaw = $_POST['artistWebsite'];
$gap = $_POST['artistPicture'];

if ($gan == ""){$gan = $name;}
if ($gai == ""){$gai = $info;}
if ($gas == ""){$gas = $summary;}
if ($gac == ""){$gac = $contact;}
if ($gaw == ""){$gaw = $site;}
if ($gap == ""){$gap = $picture;}

$sql2 = "Update artists Set artistname=\"$gan\", artistInfo=\"$gai\", artistSummary=\"$gas\", artistContact=\"$gac\", artistWebsite=\"$gaw\", artistPicture=\"$gap\" Where artistID = $_POST[id]";

print_r($_POST);

try{

    $dbh->exec($sql2);
    header("Location: artist.php?id=$_POST[id]");
    die();
} catch (PDOException $e) {
    header("Location: addEditArtist.php?id=$_POST[id]");
    die();
} ?>