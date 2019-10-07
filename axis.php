<?php

if($_POST["submit"]) {
	$recipient="is@axaud.net";
	$subject="New message from contact form";
	$sender=$_POST["sender"];
	$senderEmail=$_POST["senderEmail"];
	$message=$_POST["message"];

	$mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

	mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

	$whiteRabbit="<ul><li><pre><a class='thanx'>Your message has been sent.</a></pre></li></ul>";
}

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="media matrices">
	<meta name="keywords" content="audio, sound, music, stochastic, generative, algorithmic, algorave, electro, concrete, electroacoustic, computation, programming, live, coding, electronics, circuits, visual, video, graphics, matrix">
	<meta name="author" content="Joao Porto">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ax > web</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="sidebar">
			<ul>
				<li><pre><a href="index.html"><br><br>         ax  </a></pre></li>
				<li><pre><a href="axaud.html">        aud {<br>        -- io</a></pre></li>
				<li><pre><a href="axlog.html">      } log {<br>    -- arithm</a></pre></li>
				<li><pre><a href="axcmp.html">      } cmp {<br>   -- utation</a></pre></li>
				<li><pre><a href="axelc.html">      } elc {<br>   -- tronics</a></pre></li>
				<li><pre><a href="axgph.html">      } gph {<br>       -- ics</a></pre></li>
				<li><pre><a href="axis.php">       } is {<br>-- @axaud.net<br><br></a></pre></li>
				<li><pre><a class="p_cw">© 20XX Joao Porto</a></pre></li>
			</ul>
		</div>
		<div class="main">
			<div class="localiser">
				<h4> ax > [is @ axaud.net]</h4>
			</div>
			<div class="content">
				<form method="post" action="axis.php">
					<table>
						<tr>
							<td><input type="text" placeholder="&lt;name&gt;" name="sender"></td>
						</tr>
						<tr>
							<td><input type="text" placeholder="&lt;your@email.com&gt;" name="senderEmail"></td>
						</tr>
						<tr>
							<td><textarea rows="6" placeholder="&lt;message&gt;" name="message"></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" value="send" name="submit"></td>
						</tr>
					</table>
				</form>	
				<?=$whiteRabbit ?>
			</div>
		</div>
	</div>
</body>
</html>

