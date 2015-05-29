<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TCMC</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="fav2.ico" type="image/x-icon" />
<link href="nivo-slider/nivo-slider.css" rel="stylesheet" type="text/css">
<link href="default/default.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>

</head>

<body>
<?php include_once("header.php") ?>


<div id="container">

<div id="slider" class="nivoSlider">
<img src="TCMC%20Images%20Docs/events/s5.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" />

    <img src="TCMC Images Docs/events/s3.jpg" data-thumb="images/toystory.jpg" alt=""title="This is an example of a caption" />

<img src="TCMC Images Docs/events/s4.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" />

<img src="TCMC Images Docs/events/s1.jpg" data-thumb="images/walle.jpg" alt=""title="This is an example of a caption" data-transition="slideInLeft" />

<img src="TCMC Images Docs/events/s2.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />

</div>

<script type="text/javascript">
$(window).load(function() {
$('#slider').nivoSlider();
});
</script>
        
 
    
  <div id="featuredsml">
 			 <h1>Dream Serenade </h1>
  
	<p>Presented by Harbourside Duo, Dream Serenade features the music of Debussy, Ravel, Faure, Sibelius and others.</p>
      <p> March into <strong>Sommarhagen</strong> <br>
       Enjoy a spot of <strong>Lawn Tennis</strong> <br>
       Meet the <strong>Girl with Flaxen Hair</strong> <br>
       Dance the <strong>Habanera</strong> <br>
  Be seduced by <strong>Thais</strong> </p>
  <p>Or just relax and let the music wash over you..</p> 
   </div>
<div id="featuredsml">
 			 <h1>Volunteer Singers / Musicians</h1>
  
		<p>Our Parish Priest, Fr Mick Peters, is trying to development and foster a community for our 6 PM Vigil Mass at St Josephs on the Strand. 
I'm helping by organising an event format, where I invite our members to bring a plate for a buffet and I provide music, or friends who can sing or perform. 
Now that we are achieving some success, we need more people who can sing or play music. 
I'm open to any kind of singing or performing so long as it is not too controversial. My preference would be for an artist to sing a medley of old time favorites. 
Mass starts at 6pm and finishes about 10 to 7. </p>

</div>
<div id="featuredsml">
 			 <h1>Muso of the Month</h1>
             <h2>Wassa</h2>
  
		<p>Wassa is a six-piece percussion group performing traditional rhythms from West Africa on traditional instruments. The Townsville based group has been performing throughout North Queensland and as far as Papua New Guinea since 2001. </p>

</div>

  <?php include_once("footer.php") ?>
 	 </div>
  
  
</body>
</html>
