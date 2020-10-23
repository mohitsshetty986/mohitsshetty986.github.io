<!DOCTYPE html>
<html>
<head>
	<title>Interests</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/title.jpg" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@300&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="style/interest.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="script/jquery.fancybox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/jquery.fancybox.min.css">
	<script src="script/parallax.js-1.5.0/parallax.min.js"></script>
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
	  <a href="" class="active">Memento</a>
	  <a href="contact.php">Contact</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>

	<button id="topBtn"><i class="fa fa-arrow-up"></i></button>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
		<div class="container">
			<input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Search feed.." title="Type in a name">

				<ul id="myUL">
				  <li><a href="#"><p class="large-text">Tesla Gigafactory</p>
						<img src="facts/gigafactory.jpg" class="factimg">
						<p class="small-text"> Do you know what the most important thing Tesla makes ? Elon Musk calls it a Giant machine that builds a machine. It's called GIGAFACTORY, Giga meaning a Billion. The size of the First Gigafactory facility is truly massive with 7000 workers in action and robots roaming around the manufacturing floor. On completion it will be the biggest building in the world by footprint about 5.8 million square feet, and the second biggest by volume. It's large enough to house 107 NFL football fields or 93 Boeing 747s. The Gigafactory primarily produces lithium-ion batteries - 13 million per day and electric motors for the Tesla Model 3, Tesla’s cheapest-ever car, plus the Powerwall and Powerpack energy storage systems designed to work with renewable sources. Tesla's plan is to ramp production to 500,000 cars per year and for that it would require today's entire worldwide supply of lithium-ion batteries. Currently Tesla produces 60 percent of the Globe's EV batteries and it's accelerating to achieve production of terawatt-hour battery (per year), the million mile battery for future cars which will hold more charge and have lower price point. Gigafactory is being built with the end in mind of being a net-zero facility. There'll be over 200,000 solar panels on the roof, with the largest array of solar panels anywhere to provide most of the building’s energy, paired with Tesla’s batteries. Musk says the whole point of the massive facility is to make batteries that can be used to store renewable energy like solar more affordable.</p>
						</a><hr style="height: 2.3px; background:grey;"></li>
				  <li><a href=""><a href="#"><p class="large-text">Voyagers - the most distant human-made objects in space</p>
						<img src="facts/goldernrecord.jpg" class="factimg1">
						<p class="small-text">In 1977, Voyager 1 & Voyager 2 were launched aboard a Titan-Centaur rocket from Cape Canaveral, Florida, with the mission object to extend the exploration of the Solar system beyond the neighborhood of the outer planets to the outer limits of the Sun's sphere of influence, and possible beyond. Since 1977 Voyager 1 has travelled more than 22.3 billion km at a speed of about 3.6 AU per year and Voyager 2 at a distance of 18.5 billion km from sun at a speed of about 3.3 AU per year. These spacecrafts are continuing to characterize the outer solar system environment and search for the heliopause boundary, the outer limits of the Sun's magnetic field and outward flow of the solar wind, until around the year 2025 when there ability to generate adequate electrical power for continued science instrument operation will come to an end. More interestingly,the Voyagers carry a phonograph, gold-plated copper disk, known as the 'GOLDERN RECORD'. This 12-inch disk contains sounds and images selected to portray the diversity of life and culture on Earth. It's kind of a time capsule, intended to communicate a story of our world to extraterrestrials.</p>
						</a><hr style="height: 2.3px; background:grey;"></li>

				  <li><a href=""></a></li>
				  <li><a href=""></a></li>

				  <li><a href=""></a></li>
				  <li><a href=""></a></li>
				  <li><a href=""></a></li>
				</ul>

		</div>

    <br>
    <hr width="80%;">
	<br>

	<h1>Photos</h1>
	<div class="photos" style="width: 80%;margin: 0px auto;">

        <?php

        $dir=glob('img/not/{*.jpg,*.png}',GLOB_BRACE);

        /*   print_r($dir);    */

        foreach ($dir as $value){
            ?>
        <div class="thumbnails">     
            <a href="<?php echo $value ; ?>" data-fancybox="images">
                <img src="<?php echo $value ; ?>" alt="<?php echo $value ; ?> ">
            </a>            
        </div>
        
        <?php
        }

        ?>
        Under development..
        <br>
    	<hr>
		<br>
    </div>
    <script>
  
		  $(document).ready(function(){

		  $(window).scroll(function(){
		    if($(this).scrollTop()>40){
		      $('#topBtn').fadeIn();  
		    } else{
		      $('#topBtn').fadeOut();
		    }
		  });

		  $("#topBtn").click(function(){
		    $('html, body').animate({scrollTop : 0},800);
		  });
		});
	</script>
	<script>
		function myFunction1() {
		    var input, filter, ul, li, a, i, txtValue;
		    input = document.getElementById("myInput");
		    filter = input.value.toUpperCase();
		    ul = document.getElementById("myUL");
		    li = ul.getElementsByTagName("li");
		    for (i = 0; i < li.length; i++) {
		        a = li[i].getElementsByTagName("a")[0];
		        txtValue = a.textContent || a.innerText;
		        if (txtValue.toUpperCase().indexOf(filter) > -1) {
		            li[i].style.display = "";
		        } else {
		            li[i].style.display = "none";
		        }
		    }
		}
	</script>


</body>
</html>