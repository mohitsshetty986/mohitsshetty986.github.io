<!DOCTYPE html>
<html>
<head>
	<title>Interests</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@300&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="style/contact.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="script/jquery.fancybox.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/jquery.fancybox.min.css">
	<script>
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
		}
	</script>
</head>
<body style="background: #f8f4ed">
	<div class="topnav" id="myTopnav">
	  <a href="" style="pointer-events: none"></a>
	  <a href="index.html">Home</a>
	  <a href="work.html">Work</a>
	  <a href="interests.php">Memento</a>
	  <a href="">Contact</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<center>
		<div style="width: 100%; align-items: center;">
			<iframe width="320" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=720&amp;height=200&amp;hl=en&amp;q=mumbai+()&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
		</div>
	</center>
	<br>
	<br>
	<br>
	<center><p class="head1">Please fill out the form or drop a mail at mohitsshetty986@gmail.com and I will reach out to you soon!</p></center>
	<br><br>
	<div id="container1">
	<br>
	  <h1>&bull; Get in touch &bull;</h1>
	  <div class="underline"></div>
	  <form action="#" method="post" id="contact_form">
	  	<div class="name1">
	      <label for="name"></label>
	       <input type="text" placeholder="Name" name="name" id="customer" required>
	    </div>

	    <div class="email">
	      <label for="email"></label>
	      <input type="text" placeholder="email" name="email" id="email_input" required>
	    </div>

	    <div class="telephone">
	      <label for="telephone"></label>
	      <input type="text" placeholder="Phone" name="telephone" id="telephone_input">
	    </div>	  

	    <div class="subject">
	      <label for="describe"></label>
	      <textarea name="describe" placeholder="Message" id="describe" cols="30" rows="5" required></textarea>
	    </div>

	    <div class="submit">
	      <input type="submit" value="Send Message" name="submit" id="form_button" />
	    </div>
	  </form>
	</div>
	<br>
	<br>

</body>
</html>

<?php

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$telephone=$_POST['telephone'];
	$email=$_POST['email'];
	$messagefromcust=$_POST['describe'];

	$mailTo="mohitsshetty986@gmail.com";
	$subject="New Email from your personal Website";
	$headers="From: ".$email;
	$message="You have received an email from ".$name."\n\n Contact no.: ".$telephone."\n\n Email: ".$email."\n\n Message: ".$messagefromcust;

	$sendmail=mail($mailTo, $subject, $message, $headers);

	echo "<script>alert('Thank you for contacting Us, we will get back to you very soon')</script>";
}

?>