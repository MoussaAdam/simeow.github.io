<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>S1Meon.art - Portfolio</title>
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
			<h3>Portfolio</h3>
			<p style="text-align: left">As both a designer and developer, my strong suit consists of creative thinking as well as designing new ideas that are uncommon or have not previously been done. I am an undergraduate at the University of Colorado, and hope to work at Google in the future. If you are interested, my resume can be found <a target="_blank" href="resume.pdf">here</a>, or if you would like to contact me regarding anything, feel free to use the form below.</p>
			
			<div class="glass">
				<form id="contact" action="" method="post">
					<h3>Contact Me</h3>
					<h4>I'd love to hear from you! You can either fill out the form below, or email <a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#119;&#101;&#098;&#109;&#097;&#115;&#116;&#101;&#114;&#064;&#083;&#049;&#077;&#101;&#111;&#110;&#046;&#097;&#114;&#116;">&#119;&#101;&#098;&#109;&#097;&#115;&#116;&#101;&#114;&#064;&#083;&#049;&#077;&#101;&#111;&#110;&#046;&#097;&#114;&#116;</a></h4>
					<fieldset>
						<input placeholder="Name" name="name" type="text" maxlength="128" equired>
					</fieldset>
					<fieldset>
						<input placeholder="Email Address" name="email" type="email" maxlength="254" required>
					</fieldset>
					<fieldset>
						<textarea placeholder="Message" name="message" required></textarea>
					</fieldset>
					<label>Optional Fields</label>
					<fieldset>
						<input placeholder="Phone Number" name="telephone" type="tel" maxlength="15">
					</fieldset>
					<fieldset>
						<input placeholder="Company" name="company" type="text" maxlength="40">
					</fieldset>
					<fieldset>
						<div class="g-recaptcha" data-sitekey="6Lf0UzkUAAAAAJlCOC0DWvd2ti5mMw_0eo0ruMf5"></div>
					</fieldset>
					<fieldset>
						<button name="submit" type="submit" id="message-submit" data-submit="...Sending">Send Message</button>
					</fieldset>
					<?php require 'process.php';?>
				</form>
			</div>
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
			<li><a href="/">Home</a></li>
			<li><a href="gallery">Artwork</a></li>
			<li><a href="projects">Projects</a></li>
			<li><a href="portfolio" class="selected">Portfolio</a></li>
		</ul>
	</div>
</body>
<script src="main.js"></script>
</html>