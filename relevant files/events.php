<?php session_start();
if (!isset($_SESSION['user'])){
$_SESSION['user'] = "non-member";
}
include_once("dbc.php");
$sql = "select * from events";
$result = $dbh->query($sql);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Events</title>
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>
<?php include_once("header.php") ?>

<div id="container">
<h1 style="color:#fff;">Events</h1>
<?php foreach($result as $row){
    $title1 = $row['eventTitle'];
    $title2 = $row['eventSecondTitle'];
    $desc = $row['eventDesc'];
    $picture = $row['eventPicture'];
    $site = $row['eventTicketShop'];
    echo "<div id=\"event\"><img style=\"display:inline; float:right; padding:30px;\" src=\"TCMC Images Docs/events/".$picture."\" width=\"305\" height=\"206\"  alt=\"\"/><h1>".$title1."</h1>";
    if (!is_null($title2)){
        echo "<h2>".$title2."</h2>";
    }
    echo "<p>".$desc."</p>
<a href=\"".$site."\" target=\"_blank\"><img style=\"padding:10px;\"src=\"TCMC Images Docs/events/TShop300web.jpg\" width=\"300\" height=\"55\"  alt=\"Ticketshop Logo\"/></a>";
if ($_SESSION['user'] == "Admin"){
echo "<form action=\"deleteEvent.php\" name=\"deleteEvent\" method=\"post\">
<input type=\"hidden\" name=\"title\" value=\"".$title1."\">
<input type=\"submit\" value=\"Delete Event\"></form>";
}
echo "</div>";}

if ($_SESSION['user'] == "Admin"){
echo "<form action=\"createEventForm.php\" name=\"createEvent\">
<input type=\"submit\" value=\"Create Event\"></form>";
}

include_once("footer.php") ?>

    </div>
  </div>
  
</body>
</html>
