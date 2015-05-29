<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Become a Member</title>
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>
<?php include_once("header.php") ?>

<div id="container">


        
     
    
		<div id="Content">
        <div id="cmain"><img style="display:inline; float:right; padding:15px;"src="TCMC Images Docs/SiteImages/30anniversary023001.png" width="230" height="231"  alt="30 year anniversar of TCMC"/>
 			 <h1>TCMC Membership</h1>

<p>You can support the Music Centre by becoming a Member and derive some benefits for yourself at the same time. Your subscription helps to keep us operating and we provide substantial discounts whenever possible. 
</p>
 <p>For the Music Centre's own events, Members' <b>ticket discounts can be as high as 50%! </b></p></div>
 
 <div id="textleft">
 <a href="sign_up.php"><img style="padding-left:90px;padding-top:30px;" src="TCMC Images Docs/buttons/sign.png" width="221" height="59"  alt=""/></a>
 </div>
 <div id="textright">
 <h2>Donate</h2>
 <p><b>The Music Centre is also registered as a Deductible Gift Recipient. Any extra donations are tax-deductible!</b></p>
 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="admin@townsvillemusic.org.au">
<input type="hidden" name="lc" value="AU">
<input type="hidden" name="item_name" value="Townsville Community Music Centre">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="AUD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
<img style="padding-bottom:20px;" alt="Paypal Donate" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
</form>


</div>
 

					
    
</div>

  <?php include_once("header.php") ?>
</div>
  </div>
  
</body>
</html>
