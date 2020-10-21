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
			<div class="search">
				<input type="text" placeholder="Search feed.." feed-search />
			</div>
			<div class="items">
				<div search-item search-name="Tesla">
					<section>
						<p class="large-text"></p>
						<p class="small-text"></p>
					</section>
				</div>
			</div>
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
		$('[feed-search]').on('keyup', function() {
			var searchVal = $(this).val();
			var filterItems = $('[search-item]');

			if ( searchVal != '' ) {
				filterItems.addClass('hidden');
				$('[search-item][search-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
			} else {
				filterItems.removeClass('hidden');
			}
		});
	</script>

</body>
</html>