<?php session_start();
include_once("dbc.php");

$first = $_POST['first'];
$last = $_POST['last'];
$post = $_POST['post'];
$dayP = $_POST['day'];
$mobileP = $_POST['mobile'];
$afterHoursP = $_POST['afterHours'];
$email = $_POST['email'];
$cas = $_POST['cas'];
$password = $_POST['password'];
if ($first == ""){$first = null;}
if ($last == ""){$last = null;}
if ($post == ""){$post = null;}
if ($dayP == ""){$dayP = null;}
if ($mobileP == ""){$mobileP = null;}
if ($afterHoursP == ""){$afterHoursP = null;}
if ($email == ""){$email = null;}
if ($cas == ""){$cas = null;}
if ($password == ""){$password = null;}

    
$sql = "Insert into users ('userFirstName', 'userLastName', 'userPost', 'userDayPhone', 'userMobilePhone', 'userAfterHoursPhone', 'userEmail', 'comments', 'password', 'userType') Values (\"".$first."\", \"".$last."\", \"".$post."\", \"".$dayP."\", \"".$mobileP."\", \"".$afterHoursP."\", \"".$email."\", \"".$cas."\", \"".$password."\", \"Member\")";
echo $sql;
try{

    $dbh->exec($sql);
    header("Location: sign_in.php");
    die();
} catch (PDOException $e) {
    header("Location: sign_up.php");
    die();
} ?>