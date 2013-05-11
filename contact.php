<?php 
	$pageTitle = "David Karasek : Resume";
	$section = "contact";
	$webDev = Array("$webDeveloper", ":web_developer", "WEB_DEVELOPER", "@web_developer", "webDeveloper", "#web-developer");
	include('inc/header.php'); 
?>
<div class="container">
	<div class="row">
		<div class="span9">
		
			<h2>Contact</h2>

			<form method="post">
				<table>
					<tr>
					<th><label for="name">Name:</label> </th><td><input type="text" name="name" id="name"></td>
					</tr>
					<tr>
					<th><label for="email">Email:</label> </th><td><input type="text" name="email" id="email"></td>
					</tr>
					<tr>
					<th><label for="message">Message:</label> </th><td><textarea name="message" id="message"></textarea></td>
					</tr>

			</form>
		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
	include('inc/footer.php');
?>