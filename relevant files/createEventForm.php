<?php session_start();
if (!isset($_SESSION['user'])){
    if ($_SESSION['user' !== "Admin"]){
        header("Location: sign_in.php");
    }
}
include_once("dbc.php");
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Create Event</title>
    <link href="css.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php include_once( "header.php") ?>
    <div id="container">
        <div id="Content">
            <div id="cmain">
                <h1>Create Event</h1>
            </div>
            <form action="createEvent.php" method="post">
                <table width="400" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <p>Title</p>
                        </td>
                        <td>
                            <input type="text" name="title1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Secondary Title</p>
                        </td>
                        <td>
                            <input type="text" name="title2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Description</p>
                        </td>
                        <td>
                            <input type="text" name="desc">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Picture</p>
                        </td>
                        <td>
                            <input type="text" name="picture">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Ticket Shop Link</p>
                        </td>
                        <td>
                            <input type="text" name="link">
                        </td>
                    </tr>
                </table>
                <input type="submit">
            </form>

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