<?php session_start();
include_once( "dbc.php");
if (isset($_SESSION['user'])){
    if ($_SESSION['user'] != "Admin"){
        header("Location: sign_in.php");
    }
}else{
    header("Location: sign_in.php");
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Artist Editor</title>
    <link href="css.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php include_once( "header.php") ?>

    <div id="container">
        <div id="Content">
            <?php if (isset($_GET['id'])){
    echo "
    <div id=\"cmain\">
                <h1>Artist Editor</h1>

                <p>You can edit an artist here. </p>
                <p>Enter the relative feilds to edit an artist</p>
            </div>
    <form action=\"submitUpdate.php\" method=\"post\"><table width=\"400\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                    <td>
                        <p>Name</p>
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"id\" value=\"$_GET[id]\" enctype=\"multipart/form-data\">
                        <input type=\"text\" name=\"artistName\">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Information</p>
                    </td>
                    <td>
                        <input type=\"text\" name=\"artistInfo\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"artistSummary\" value=\"summary\">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Picture</p>
                    </td>
                    <td>
                        <input type=\"file\" name=\"artistPicture\">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Contact</p>
                    </td>
                    <td>
                        <input type=\"number\" name=\"artistContact\">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Website</p>
                    </td>
                    <td>
                        <input type=\"text\" name=\"artistWebsite\">
                    </td>
                </tr>
            </table>
            <input type=\"submit\" name=\"submit\" value=\"Submit\">
            </form>";}
            else {
                echo "
                <div id=\"cmain\">
                <h1>Artist Creator</h1>

                <p>You can add an artist here. </p>
                <p>Enter the relative feilds to add an artist</p>
            </div>
                <form action=\"submitArtist.php\" method=\"get\"><table width=\"400\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                    <td>
                        <p>Name</p>
                    </td>
                    <td>
                        <input type=\"text\" name=\"artistName\">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Information</p>
                    </td>
                    <td>
                        <input type=\"text\" name=\"artistInfo\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"artistSummary\" value=\"summary\">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Picture</p>
                    </td>
                    <td>
                        <input type=\"file\" name=\"artistPicture\">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Contact</p>
                    </td>
                    <td>
                        <input type=\"number\" name=\"artistContact\">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Website</p>
                    </td>
                    <td>
                        <input type=\"text\" name=\"artistWebsite\">
                    </td>
                </tr>
            </table>
            <input type=\"submit\">
            </form>";}
            ?>
            <div id="textleft">
                <h2></h2>
            </div>
            <div id="textright">
                <h2> </h2>

            </div>
        </div>

        <?php include_once( "footer.php") ?>
    </div>
    </div>

</body>

</html>