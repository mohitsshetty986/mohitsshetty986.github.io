<!DOCTYPE html>
<html>
<head>
	<title>Interests</title>
	<meta charset="utf-8">
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

	<button id="topBtn"><i class="fas fa-arrow-up"></i></button>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

		<div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="facts/facts.jpg">
		</div>

    	<h1>My Notebook</h1>
    	<div class="time">
    		<time>OCT. 14, 2020</time>
  		</div>
  		<article>

  		<h2>Skyroot Aerospace's 100% 3D printed Dhawan-1 rocket engine</h2>

  		<img src="facts/dhawan-1.jpg" style="width:100%">
  		<br>

  		<p1>References:- <a href="https://skyroot.in/">skyroot.in</a>, <a href="https://yourstory.com/2020/09/hyderabad-spacetech-startup-skyroot-cryogenic-rocket-engine-dhawan1">yourstory.com</a>, <a href="https://manufactur3dmag.com/indias-skyroot-aerospace-test-fires-upper-stage-rocket-engine-fitted-with-3d-printed-injector/">manufactur3dmag.com</a>, <a href="https://www.3dprintingmedia.network/skyroot-aerospace-shows-off-100-3d-printed-dhawan-1-rocket-engine/#:~:text=On%20the%20occasion%20of%20the,also%20100%25%20Made%20in%20India.">3dprintingmedia.network</a></p1>

  		<p>On the ocassion of the 100th birth anniversary of renowned Rocket Scientist, Dr. Satish Dhawan, Skyroot Aeropsace unveiled it's first 100% 3D printed cryogenic rocket engine, named Dhawan-1, running on Liquid Natural Gas as fuel.</p>

    	<p>Compared to traditional manufacturing it reduced overall mass by 50 %, reduced total number of components and lead time by 80%. The engine is capable of multiple restarts enabling them to insert various satellites into multiple orbits in a single mission.It's 100% made in India.</p>

    	<p>Skyroot is building a series of Rockets named Vikram, after Dr. Vikram Sarabhai. Vikram is built on a common architecture and covers a wide range of payloads, they offer the most affordable and on demand ride to space.</p>

    	<p>This cyyogenic engine is expected to be used in Vikram-II rocket for propulsion.</p>

    	<br>
    	<h2>Battery made of nature's extracts by Aloe E-Cell,an Indian startup</h2>
  		<p1>References:- <a href="https://www.aloeecell.com/">aloeecell.com</a>, <a href="https://www.f6s.com/aloeecell">f6s.com/</a>, <a href="https://timesofindia.indiatimes.com/city/lucknow/aloe-magic-herbal-panacea-can-now-power-green-batteries/articleshow/71390317.cms">The Times Of India</a></p1>

	    <p>Out of total 2 Million Metric tonnes of E-waste generated annually it contains 11.4 M batteries accounting to a share of 82% of total waste resulting in landfills causing air, water & soil pollution. 97% of the material used in traditional batteries are imported levying a high pressure of >148 Billion Dollars on Indian economy.</p>

	    <img src="facts/aloeecell.jpg" style="width:60%">

	    <p>Aloe E-cell have created world's first 100% Eco friendly and non hazardous 1.5V batteries using Aloevera, at 10% cheaper cost and 1.5 times durability.</p>

	    <p>Aloevera cells have similar potential as the traditional batteries, at much lesser and greener cost and are safe to use and dispose as it can be easily recycled or refilled.</p>
    </article>

    <br>
    <hr width="80%;">
	<br>

	<h1>Making Memories</h1>
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
    
</body>
</html>