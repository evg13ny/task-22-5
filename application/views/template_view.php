<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>E2 Team</title>

	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
	<script type="text/javascript">
		function random(number) {

			return Math.floor(Math.random() * (number + 1));
		};


		$(document).ready(function() {

			var quotes = $('.quote');
			quotes.hide();

			var qlen = quotes.length;
			$('.quote:eq(' + random(qlen - 1) + ')').show();
		});
	</script>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<a href="/">E2</span> <span class="cms">Team</span></a>
			</div>
			<div id="menu">
				<ul>
					<li class="first active"><a href="/main">Main</a></li>
					<li><a href="/services">Services</a></li>
					<li><a href="/portfolio">Portfolio</a></li>
					<li class="last"><a href="/contacts">Contacts</a></li>
				</ul>
				<br class="clearfix" />
			</div>
		</div>
		<div id="page">
			<div id="sidebar">
				<div class="side-box">
					<h3>Random quote</h3>
					<p align="justify" class="quote">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel justo vel leo iaculis egestas. Nulla rutrum mauris risus. Nam a nisi mauris. Pellentesque auctor.
					</p>
					<p align="justify" class="quote">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget lectus sed dui viverra facilisis in quis metus. Phasellus quis porta dui. Curabitur rhoncus velit.
					</p>
					<p align="justify" class="quote">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et.
					</p>
					<p align="justify" class="quote">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum.
					</p>
					<p align="justify" class="quote">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget magna placerat, pretium neque vitae.
					</p>
				</div>
				<div class="side-box">
					<h3>Main menu</h3>
					<ul class="list">
						<li class="first "><a href="/">Main</a></li>
						<li><a href="/services">Services</a></li>
						<li><a href="/portfolio">Portfolio</a></li>
						<li class="last"><a href="/contacts">Contacts</a></li>
					</ul>
				</div>
			</div>
			<div id="content">
				<div class="box">
					<?php include 'application/views/' . $content_view; ?>

				</div>
				<br class="clearfix" />
			</div>
			<br class="clearfix" />
		</div>
		<div id="page-bottom">
			<div id="page-bottom-sidebar">
				<h3>Contacrs</h3>
				<ul class="list">
					<li class="first">icq: 987654321</li>
					<li>skypeid: skypelogin</li>
					<li class="last">email: abrakadabra@gmail.com</li>
				</ul>
			</div>
			<div id="page-bottom-content">
				<h3>About us</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac pretium sapien. Morbi eget lectus pretium leo malesuada aliquet. Nam sit amet iaculis sem. Sed facilisis bibendum eros ut imperdiet. Suspendisse potenti. Donec eros turpis, eleifend at elit sed, porta vulputate ante. Sed nec pharetra quam, in gravida ligula. Vivamus.
				</p>
			</div>
			<br class="clearfix" />
		</div>
	</div>
	<div id="footer">
		<a href="/">E2 Team</a> &copy; 2021</a>
	</div>
</body>

</html>