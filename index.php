<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>S1Meon.art</title>
	<link rel="stylesheet" type="text/css" href="formatting.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<?php require_once "recaptchalib.php";?>
</head>

<body class="blur">
	<input type="checkbox" id="toggler" onchange="navToggled()" checked>
	<div class="wrap">
		<label for="toggler" class="toggle">
			<p class="toggle">☰</p>
		</label>
	</div>
	<div class="container">
		<div class="glass">
			<h2><b>S1M</b>eon art</h2>
			<h4>ARTIST | COMPUTER SCIENTIST</h4>
			<table>
			<td><p>This is mainly just a site for me to share my work and experience. Using the navigation bar on the left, you can explore my work and find out how to contact me, please do if you have any questions.<br><br>Thanks for visiting!</p></td>
			<td width="30%"><img id="portrait" width="100%" src="firstPage.jpg"></td>
			</table>
			<br>
			<h3>Find me at</h3>
			<div class="social">
				<a href="https://s1meon.deviantart.com/" target="_blank"><span>DeviantArt</span></a>
				<a href="https://www.instagram.com/simewu/" target="_blank"><span>Instagram</span></a>
				<a href="http://colorslive.com/author?id=95735" target="_blank"><span>Colors3D</span></a>
				<a href="https://twitter.com/monstre180" target="_blank"><span>Twitter</span></a>
				<a href="snapchat.png" target="_blank"><span style="width:143px;">
					<img src="snapchat-thumbnail.png">@s1meon314<hr>Snapchat
				</span></a>
			</div>
			<div id="bingCited" class="glass">
				<h3 style="font-size: 16px;">Wallpaper from <a href="https://www.bing.com/" target="_blank">Bing Images</a></h3>
			</div>
		</div>
	<?php require_once "include/init.php"?></div>
	<div class="hidden">
		<ul>
			<!--<li>
				<a href="/"><img src="profile.jpg" alt="" class=""/></a>
			</li>-->
			<li><a href="/" class="selected">Home</a></li>
			<li><a href="gallery">Artwork</a></li>
			<li><a href="projects">Projects</a></li>
			<li><a href="portfolio">Portfolio</a></li>
			
		</ul>
	</div>
</body>
<script src="main.js"></script>
</html>