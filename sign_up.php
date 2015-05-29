<?php session_start();
if (!isset($_SESSION['user'])){$_SESSION['user'] = "non-member";}
    if (($_SESSION['user'] == "Admin") or ($_SESSION['user'] == "Member")) {
    header("Location: index.php");
                                }
                             
include_once("dbc.php")?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Become a Member</title>
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>
<?php include_once("header.php"); ?>

<div id="container">


        
     
    
		<div id="Content">
        <img src="TCMC Images Docs/Panoraama1.jpg" width="1200" height="358"  alt=""/>
<div id="cmain">
	  <h1>Sign Up</h1>
	
<p>A Townsville Comunity Music Centre membership subscription helps to keep us operating and we provide substantial discounts whenever possible.  </p>
 <p>Individual Membership subscription is $25 per year. </p></div>
 
 <form action="newUser.php" method="post"><table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><p>First Name:</p></td>
    <td><input type="text" name="first"></td>
  </tr>
  <tr>
    <td><p>Last Name:</p></td>
    <td><input type="text" name="last"></td>
  </tr>
  <tr>
    <td><p>Postal Address:</p></td>
    <td><input type="text" name="post"></td>
  </tr>
  <tr>
    <td><p>Day Phone</p></td>
    <td><input type="tel" name="day"></td>
  </tr>
  <tr>
    <td><p>Mobile Phone:</p></td>
    <td><input type="tel" name="mobile"></td>
  </tr>
  <tr>
    <td><p>After Hours Phone:</p></td>
    <td><input type="tel" name="afterHours"></td>
  </tr>
  <tr>
    <td><p>Email:</p></td>
    <td><input type="email" name="email"></td>
  </tr>
  <tr>
    <td><p>Comments and Suggestions:</p></td>
    <td><textarea name="cas"></textarea></td>
  </tr>
  <tr>
    <td><p>Account Password</p></td>
    <td><input type=password name="password"></td>
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

  <?php include_once("footer.php"); ?>
</div>
  </div>
  
</body>
</html>
