<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>MichaelJayLissner.com  >  Contact</title>
		<meta name="author" content="Michael Lissner">
		<meta name="description" content="content" >
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
		<link rel="stylesheet" type="text/css" href="assets/stylesheets/onecol.css">
		<SCRIPT TYPE="text/javascript">
		<!--
		// copyright 1999 Idocs, Inc. http://www.idocs.com/tags/
		// Distribute this script freely, but please keep this
		// notice with the code.

		var rollOverArr=new Array();
		function setrollover(OverImgSrc,pageImageName)
		{
		if (! document.images)return;
		if (pageImageName == null)
		    pageImageName = document.images[document.images.length-1].name;
		rollOverArr[pageImageName]=new Object;
		rollOverArr[pageImageName].overImg = new Image;
		rollOverArr[pageImageName].overImg.src=OverImgSrc;
		}

		function rollover(pageImageName)
		{
		if (! document.images)return;
		if (! rollOverArr[pageImageName])return;
		if (! rollOverArr[pageImageName].outImg)
		    {
		    rollOverArr[pageImageName].outImg = new Image;
		    rollOverArr[pageImageName].outImg.src = document.images[pageImageName].src;
		    }
		document.images[pageImageName].src=rollOverArr[pageImageName].overImg.src;
		}

		function rollout(pageImageName)
		{
		if (! document.images)return;
		if (! rollOverArr[pageImageName])return;
		document.images[pageImageName].src=rollOverArr[pageImageName].outImg.src;
		}
		//-->
		</SCRIPT>
		<SCRIPT TYPE="text/javascript">
			<!--
			setrollover('assets/images/buttonover-0-0.jpg',   'home');
			setrollover('assets/images/buttonover-1-0.jpg',   'biography');
			setrollover('assets/images/buttonover-2-0.jpg',   'cv');
			setrollover('assets/images/buttonover-3-0.jpg',   'aboutsite');
			setrollover('assets/images/buttonover-4-0.jpg',   'pics');
			setrollover('assets/images/buttonover-5-0.jpg',   'charity');
			setrollover('assets/images/buttonover-6-0.jpg',   'contact');
			//-->
		</script>
	</head>



	<body>
		<div id="container">

				<!Begin #banner>
				<div id="banner">
					<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td colspan="2"><img src="assets/images/spacer.gif" height="20"></td>
						</tr>
						<tr>
							<td><img src="assets/images/spacer.gif" width="20" height="1"></td>
							<td><h1><a class="header" href="http://www.michaeljaylissner.com">MichaelJayLissner.com</a></h1></td>
						</tr>
					</table>
				</div><!End #banner>


				<!Begin #buttons>
				<div id="buttons">
					<table cellpadding="0" cellspacing="0" border="0">
			  			<tr>
			  				<td>
			  					<a href="index.htm" onMouseOver = "rollover('home')" onMouseOut = "rollout('home')">
			  						<img src="assets/images/button-0-0.jpg" name="home" width="88" height="30" border="none">
			  					</a>
			  				</td>
			  				<td>
			  					<a href="biography.htm" onMouseOver = "rollover('biography')" onMouseOut = "rollout('biography')">
			  						<img src="assets/images/button-1-0.jpg" width="118" height="30"  name="biography" border="none">
			  					</a>
			  				</td>
			  				<td>
			  					<a href="cv.htm" onMouseOver = "rollover('cv')" onMouseOut = "rollout('cv')">
			  						<img src="assets/images/button-2-0.jpg" width="157" height="30" name="cv" border="none">
			  					</a>
			  				</td>
			  				<td>
			  					<a href="about_site.htm" onMouseOver = "rollover('aboutsite')" onMouseOut = "rollout('aboutsite')">
			  						<img src="assets/images/button-3-0.jpg" width="111" height="30"  name="aboutsite" border="none">
			  					</a>
			  				</td>
			  				<td>
			  					<a href="pics/index.htm" onMouseOver = "rollover('pics')" onMouseOut = "rollout('pics')">
			  						<img src="assets/images/button-4-0.jpg" width="137" height="30" name="pics" border="none">
			  					</a>
			  				</td>
			  				<td>
			  					<a href="charity.htm" onMouseOver = "rollover('charity')" onMouseOut = "rollout('charity')">
			  						<img src="assets/images/button-5-0.jpg" width="91" height="30" name="charity" border="none">
			  					</a>
			  				</td>
			  				<td>
			  					<a href="contact.htm" onMouseOver = "rollover('contact')" onMouseOut = "rollout('contact')">
			  						<img src="assets/images/buttonover-6-0.jpg" width="98" height="30" name="contact" border="none">
			  					</a>
			  				</td>
			  			</tr>
			  		</table>
			  	</div><!End #button>



				<!Begin #content>
				<div id="content">
					<table cellpadding="0" cellspacing="0" border="0">
				  		<tr>
							  	<td>
							  		<h3>Contact Michael Lissner</h3>
							  		<form method="POST" action="mailer.php">
										<p>Full Name:</p>
										<input type="text" name="name" size="40"><br>
										<br><p>E-mail Address:</p><input type="text" name="email" size="40"><br>
										<br><p>Message:</p><textarea rows="20" name="message" cols="70"></textarea>
										<br>
										<br>
										<input type="submit" value="Submit" name="submit">
									</form>
							  	</td>
						</tr>
					</table>
				</div><!End #content>

				<!Begin #footer>
				<div id="footer">
					<hr>
					<script language="javascript" src="http://www.quotedb.com/quote/quote.php?action=random_quote&=&a[44]=44&a[4]=4&a[52]=52&a[76]=76&a[525]=525&a[107]=107&a[229]=229&a[87]=87&a[45]=45&a[23]=23&a[73]=73&a[421]=421&a[631]=631&a[48]=48&a[231]=231&a[336]=336&"></script>
				</div><!End #footer>
			</div><!End #container>
	</body>
</html>
