<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
  <meta name="description" content="Simple Slot Game">
  <meta name="keywords" content="HTML,CSS,JavaScript">
  <meta name="author" content="Harry (Bitchiko) Kodua">
	<meta name="theme-color" content="#000000">
	<meta name="viewport" content="width=480,initial-scale=1, maximum-scale=1">
	<title>EXTREME GAMING</title>
	<link rel="icon" href="image/logo.jfif">
	<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body style=" background-image: url('../image/bg.jpg');
  background-repeat: no-repeat; 
  background-size: cover;
   background-attachment: fixed;
 
">
<div class="container" id="stopButton">
		  <div class="preview center" style="  font-family: monospace;
      background-color: black;
      color: white;
      padding: 5px;
      border-radius: 4px;
      box-shadow: 2px 2px 20px 23px white;
      text-align: center;">
		  	<h1 style="text-align:  center; color:  white;">WINNER LIST CARS SEDAN MG 5 </h1>
		  	
		  </div>
	
		<div class="col col-auto">
			<div id="linksX" style="color: white;">
				<marquee behavior="scroll" direction="down" id="mymarquee"  style="height:600px; font-size: 70px; text-align: center;  font-family: monospace;">	</marquee>	
			</div>
		</div>
</div>

 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../js/jquery.confetti.js"></script>

<script type="text/javascript">





$(function() {



	function Spin() {
	
	let p = '';
	 $.ajax({
    url: 'query.php',
    	
		success:function(res, textStatus, jqXHR) 	{
			var arObj = JSON.parse(res);
			 _jsprodinfo =  arObj.items;
			
			for(cnt1 in  _jsprodinfo)
			 { 			
				p = p + '<p>'+ _jsprodinfo[cnt1] + '</p>';
			 }			 
			// alert(p);
			 $( "#mymarquee" ).html(p);
			 
	}

	});
}


Spin ();


});


</script>


</body>
</html>
