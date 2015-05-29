<?php session_start();
include_once("dbc.php");
if (!isset($_SESSION['user'])){
    $_SESSION['user'] = "non-member";
}
$sql = "select * from bulletins";
$result=$dbh->query($sql);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Bulletin Board</title>
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>
<?php include_once("header.php") ?>

<div id="container">

<h1 style="color:#fff;">Bulletin Board</h1>
    <?php foreach($result as $row){
    
   echo "<div id=\"event\"><h1>".$row['title']."</h1><img style=\"display:inline; float:right; padding:30px;\"src=\"TCMC Images Docs/bulletin/".$row['picture']."\" width=\"333\" height=\"150\"  alt=\"\"/><p>".$row['text']."</p><p>".$row['contact']."</p></div>";

}
?>
  <?php include_once("footer.php") ?>
</div>
  </div>
  
</body>
</html>
