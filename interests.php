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
		<div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="facts/facts.jpg">
		</div>
	
	    	<h2>Tesla Gigafactory</h2>
	  		<p1>References:- <a href="https://www.tesla.com/gigafactory">tesla.com</a>, <a href="https://www.theverge.com/transportation/2018/11/30/18118451/tesla-gigafactory-nevada-video-elon-musk-jobs-model-3">theverge/</a>, <a href="https://www.manifestias.com/2020/06/12/gigafactories/">Manifest IAS</a>, <a href="https://www.cnbc.com/2019/05/03/we-went-inside-teslas-gigafactory-heres-what-it-looked-like.html">CNBC</a></p1>

		    <p>Elon Musk has called the Gigafactory a "machine that builds the machine." Gigafactory is a one-size-fits-all factory that makes anything Tesla sells from batteries, solar panels, home storage solutions and electric vehicles, all under one roof. The current structure is only 30% complete housing approximately 5.3 million sq. ft. of operational space accross several floors. The size is truely massive such that, on completion the Gigafactory will be the biggest building in the world by footprint, designed to be a net zero energy factory powered by solar.</p>

		    <img src="facts/hero.jpg" style="width:100%">

		    <p>Gigafactory primarily develops lithium-ion batteries from start-to-finish. Alongside the batteries, the factory produces electric motors for Tesla's cheapest car Model 3, the powerwall and powerpack energy storage systems. To ramp production of cars to half a million per year, Tesla requires today's entire worldwide supply of lithium-ion batteries. Tesla currently produces more batteries in terms of kWh than all other carmakers combined and with the Gigafactory ramping up production, the battery cells cost will significantly decline through proportionate savings in cost gained from increased level of production, innovative manufacturing, reduction of waste and optimization of manufacturing processes all under one roof.</p>

	    </article>

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
		var text = document.getElementById('hearder2');
        var newDom = '';
        var animationDelay = 6;

        for(let i = 0; i < header2.innerText.length; i++)
        {
            newDom += '<span class="animation">' + (header2.innerText[i] == ' ' ? '&nbsp;' : header2.innerText[i])+ '</span>';
        }

        header2.innerHTML = newDom;
        var length = header2.children.length;

        for(let i = 0; i < length; i++)
        {
            header2.children[i].style['animation-delay'] = animationDelay * i + 'ms';
        }
    
	</script>

</body>
</html>