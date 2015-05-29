<?php session_start();
include_once("dbc.php");
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link href="css.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php include_once( "header.php") ?>
    <div id="container">
        <div id="Content">
            <div id="cmain">
                <h1>Sign In</h1>
                <p>Sign In to your Townsville Comunity Music Centre membership account, to make changes to you information </p>
                <p>If you do not have an account, find out more <a herf="membership.html">HERE</a>
                </p>
            </div>
            <form action="log_in.php?" method="get">
                <table width="400" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <p>Email</p>
                        </td>
                        <td>
                            <input type="text" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Password</p>
                        </td>
                        <td>
                            <input type="password" name="password">
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