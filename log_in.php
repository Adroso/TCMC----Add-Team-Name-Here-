<?php
session_start();
include_once( "dbc.php");
$usersEmail = $_GET['email'];
$sql = "select * from users where userEmail = \"$usersEmail\"";
$result= $dbh->query($sql);
foreach($result as $row)
{ $email = $row['userEmail']; $password = $row['password'];
$name = $row['userFirstName']; $user = $row['userType'];
}
if ($usersEmail == ""){
header("Location: sign_in.php");
    die();
}
if (isset($email))
{
if ($usersEmail == $email)
{ 
    if ($_GET['password'] == $password)
    {
    $_SESSION['name'] = $name;
    $_SESSION['user'] = $user;
    header("Location: index.php");
    die();
    } else {
    header("Location: sign_in.php"); die();
    }
} 
} else {
    header("Location: sign_in.php"); die();
}

?>