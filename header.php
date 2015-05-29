<div id="header">
	<div id="header2">
		<div id="logo"><a href="index.php"><img src="TCMC Images Docs/SiteImages/TCMC98Neg.gif" width="90" height="61"  alt=""/></a></div>
 		<div id="navigation">
 			<ul>
                <li><a href="events.php">Events</a>
                	<ul>
                    	<li><a href="board.php">Bulletin Board</a></li>
           			</ul>
                </li>	
				<li><a href="membership.php"> Membership</a></li>
            	<li><a href="selectArtist.php">Muso's</a></li>
				<li><a href="about_us.php">About Us</a>
             		<ul>
                    	<li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="sponsors.php">Sponsors</a></li>
                        <li><a href="new_to_townsville.php">New to Townsville?</a></li>
           			</ul>
			  </li>
         	</ul>
         </div>
        <?php
if ((isset($_SESSION['user'])) and ($_SESSION['user'] != "non-member")){
    if (($_SESSION['user'] == "Member") or ($_SESSION['user'] == "Admin")){
        echo "<a href=\"sign_out.php\"><img style=\"float:right; padding-top:12px;\" src=\"TCMC Images Docs/buttons/signout.png\" width=\"90\" height=\"35\"  alt=\"\"/></a>";
    }
}
else{
        echo "<a href=\"sign_in.php\"><img style=\"float:right; padding-top:12px;\" src=\"TCMC Images Docs/buttons/signin.png\" width=\"90\" height=\"35\"  alt=\"\"/></a>
         <a href=\"sign_up.php\"><img style=\"float:right; padding-top:12px; padding-right:10px;\"src=\"TCMC Images Docs/buttons/signup.png\" width=\"100\" height=\"35\"  alt=\"\"/></a>";}
        ?>
	</div>
</div>