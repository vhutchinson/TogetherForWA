<?php include 'navigation.php';?>

<body>
	<h3>Tell Us What You Think</h3>

	<div class="container">
	<form action="../php/action form.php" method="post">
		<label for="fname">First Name</label>
		<input type="text" id="fname" name="firstname" placeholder="Your name..">

		<label for="lname">Last Name</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name..">

		<label for="country">Country</label>
		<select id="country" name="country">
		<option value="usa">USA</option>
		<option value="australia">Australia</option>
		<option value="canada">Canada</option>
		</select>

		<label for="subject">Subject</label>
		<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

		<input type="submit" value="Submit">
	</form>
	</div>
</body>