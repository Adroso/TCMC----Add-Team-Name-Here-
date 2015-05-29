<?php session_start();
include_once( "dbc.php");
$sql="select * from artists";
$sql2="select min(artistID) from artists";
$result=$dbh->query($sql);
$result2=$dbh->query($sql2);
foreach($result2 as $r){
 $feature = $r['min(artistID)'];};
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="css.css" rel="stylesheet" type="text/css">

</head>

<body>
    <?php include_once( "header.php") ?>
    <div id="container">
        <h1 style="color:#fff;">Artists</h1>
        <?php
    foreach($result as $row) { 
    if ($row['artistID'] == $feature){
    echo "<a href=\"artist.php?id=",$row['artistID'],"\"><div id=\"featuredart\"><img style=\"display:inline;float:left;padding-right:30px;\" src=\"TCMC Images Docs/musos/Harbourside.jpg\" width=\"380\" height=\"300\" alt=\"\" /></a>
            <h1>",$row['artistName'],"</h1>
            <p>",$row['artistSummary'],"</p>";
            if (!is_null($row['artistContact'])){
                echo "<p><b> Contact Number: </b>",$row['artistContact'],"</p>";}
            if (!is_null($row['artistWebsite'])){
                echo "<p><b>Website: </b> <a href=\"",$row['artistWebsite'],"\">",$row['artistWebsite'],"</a>
            </p>";
            }
        echo "</div>";

    }else {
    echo "<a href=\"artist.php?id=", $row['artistID'], "\"><div id=\"individualart\"><span id=\"artinfo\"> <p>", $row['artistSummary'] ,"</p></span><img src=\"TCMC Images Docs/musos/",$row['artistPicture'],"\" width=\"220\" height=\"140\" alt=\"\" />
    </div></a>";
    }
} ?>
        <?php if (isset($_SESSION['user'])){
        if ($_SESSION['user'] == "Admin"){
            echo "<form action=\"addEditArtist.php\">
            <input type=\"submit\" value=\"Add Artist\"></form>";};}
        ?>
        
    <?php include_once( "footer.php") ?>
    </div>
    </div>

</body>

</html>