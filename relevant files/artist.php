<?php session_start();
if (!isset($_SESSION['user'])){$_SESSION['user'] = "non-member";};
include_once( "dbc.php"); $sql="select * from artists where artistID = $_GET[id]";
$result=$dbh->query($sql); foreach($result as $row){$name = $row['artistName']; $info = $row['artistInfo']; $site = $row['artistWebsite']; $picture = $row['artistPicture']; $phone = $row['artistContact'];} ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $name ?>
    </title>
    <link href="css.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php include_once( "header.php"); ?>
    <div id="container">
        <div id="Content">
            <h1><?php echo $name; ?></h1>
            <div id="artleft">
                <?php echo "<p>",$info,"</p>"; if (!is_null($phone)){ echo "<p><b>Contact Number: </b>", $phone, "</p>"; } if (!is_null($site)){ echo "<p><b>Website: </b><a href=$site>", $site, "</a></p>";};
if (($_SESSION[ "user"]=="Admin" ) and (!is_null($_SESSION[ "user"]))) { 
    echo "<form action=\"deleteEntry.php\">
<input type=\"hidden\" name=\"id\" value=\"$_GET[id]\">
<input type=\"submit\" value=\"Delete\"></form>";
    
                 echo "<form action=\"addEditArtist.php?id=\"$_GET[id]\">
<input type=\"hidden\" name=\"id\" value=\"$_GET[id]\">
<input type=\"submit\" value=\"Edit\"></form>";};
    ?>
            </div>
            <div id="artright"> <img style="padding:20px; display:inline;" src="TCMC Images Docs/musos/<?php echo $picture ?>" width="400" height="327" alt="Artist picture" />
            </div>

        </div>
        <?php include_once( "footer.php"); ?>
    </div>

    </div>
</body>

</html>