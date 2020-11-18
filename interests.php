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
	  <a href="" class="active">Leisure</a>
	  <a href="contact.php">Contact</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>

	<button id="topBtn"><i class="fa fa-arrow-up"></i></button>
	<div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="facts/parallax.jpg">
		<p class="info">
			<br>
		    "We all have two lives, the second begins when we realize we only have one."
		    <br>
		</p>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
		<div class="container">
			<input type="text" id="myInput" onkeyup="myFunction1()" oninput="myFunction2()" placeholder="Search feed.." title="Type in a name">

				<ul id="myUL">
					<li><a href="#altair"><p class="large-text" id="altair">Altair 8800</p>
						<img src="facts/altair-8800.jpg" id="myImg1" class="factimg" alt="The January 1975 article on Altair 8800">
						<p class="small-text">It goes without saying that the personal computer revolutionized businesses and homes around the globe, but what was the very first one that served as the de facto standard for the PCs of today? We have to travel back to 1969 when an engineer working at Kirtland Airforce base in New Mexico, Henry Edward Roberts together with 3 other colleagues, with their electronics background decided to sell small kits for model rocket hobbyists. They founded "Micro Instrumentation and Telemetry Systems" (MITS) in Roberts' garage and started selling radio transmitters and instruments for model rockets which didn't achieve market success and they switched to selling calculator kits.<span class="dots">...</span><span class="more"> In April 1974, Intel launched the 8080A CPU, which was capable of addressing up to 64kb of RAM and so based on several improved models of calculator kits, Robert decided to design an Intel 8080 computer. There was a sizable customer base at schools, colleges, electronic enthusiasts who knew about and wanted to have computers and the available Intel 8008 based computer at the time was not powerful enough to run a high level language like BASIC. Robert came up with the first prototype of Intel 8080 in October 1974 which was more powerful than Intel 8008, designed as an expandable system, that opened it up to all sorts of applications. Les Solomon from the popular magazine "Popular Electronics" who knew about Robert's work thought of the Intel 8080 computer as an attention-grabbing cover story and thus the Altair 8800 (Popular Electronics editors came up with this name and not Roberts) was launched in market and was an instant success with 40000 units sold. Initially programming the Altair was tedious with no keyboards and users had to repeatedly toggle switches corresponding to a microprocessor instruction in binary and use enter switch to load the code into memory until all the instructions of a complete program were in place. The rudimentary computer was upgraded to a $439 Computer kit that had 2 memory boards of 1024 words and 4096 words, Parallel and Serial Interface Boards, a paper tape reader for storage, Audio Cassette Interface Board, a 300KB floppy drive and a Teletype. After an article release on Altair in January 1975, Roberts was contacted by a Harvard undergrad Bill Gates and his friend Paul Allen who offered to create a BASIC interpreter, using a self-made simulator. After they had a version working, Allen flew to MITS, to deliver the first program which was also the "Micro-Soft's founding product Altair BASIC". The first program ever typed in Altair BASIC was "print 2+2" and after typing "run" it typed back the correct answer: "4". The January 1975 article also led to the creation of Homebrew Computer Club of electronic hobbyists headed by the Apple Computer founders Steve Wozniack and Steve Jobs.</span> <button class="read">read more</button></p>
						</a></li>

					<li><a href="#blockchain"><p class="large-text" id="blockchain">Blockchain</p>
						<img src="https://github.com/mohitsshetty986/secondary/blob/main/blockchain.JPG?raw=true" id="myImg" class="factimg" alt="Blockchain Usecases">
						<p class="small-text">What is a Blockchain ? As the name suggests, it's a chain of blocks that contains information. This technique was originally described in 1991 intended to timestamp digital documents so that it’s not possible to backdate or tamper with them. It went by mostly unused until 2009 when Satoshi Nakamoto created the digital cryptocurrency Bitcoin. A blockchain is a distributed ledger completely open to anyone with an interesting property of data being immutable. Each block in a blockchain contains some "Data" which depends on the type of blockchain, for e.g. Bitcoin stores transaction details such as sender, receiver and amount of coins. <span class="dots">...</span><span class="more">Second element is the "Hash" which is like an unique fingerprint identifying the block and it's contents and changing something inside block changes the hash. The third element is the "Hash of previous block" effectively creating a chain of blocks. The first block is a special case which doesn't point to it's previous block known as the "Genesis block", the first block of Bitcoin ever mined. If a block is changed then it's hash changes and all the following blocks will no longer have a valid hash of the previous block making them invalid. Hashes are not secure enough as computers these days are fast and could effectively tamper with a block and recalculate all the hashes of other blocks within seconds to make the blockchain valid again. So we have something called as the "Proof-of-work" mechanism that slows down the creation of new blocks. For bitcoin, it takes 10 mins to create the proof-of-work and add a new block to the chain. This makes it hard to tamper with a block as the proof-of-work will need to be recalculated for all the blocks. Another way Blockchains secure themseleves is by using a peer-to-peer network to manage the chain instead of using a central entity. It's a globally distributed network of connected computers or nodes(different types based on their functions on a network) constantly exchanging the latest blockchain data with each other so all nodes stay up to date. When someone joins the network they get the full copy of the blockchain and the nodes verify if everything is in order. When a miner(a type of node) in the network creates a new block, it's sent to everyone in the network to verify the block hasn't been tampered with and by creating consensus all the nodes agree about what blocks are valid and the invalid ones will be rejected. Blockchains are constantly evolving with the recent development being the "Smart Contracts", which brings transparency and simplicity in business transactions. Smart contracts are lines of code stored on a blockchain and automatically execute when predetermined terms and conditions are met. For example when you plan to buy a car at a dealership and you need financing for that, then it will require a credit check and several forms to fill out with your personal information and in the process you'll interact with several different people, the salesperson, finance broker, lender which will add various commissions and fees to the base price of the car. with Smart contracts this complex process with several intermediaries can be streamlined with Lenders making a decision about credit from your identity stored on a blockchain and then, a smart contract would be created between your bank, the dealer and the lender. Once the funds are released to the dealer, the lender will hold the car's title and based on the agreed terms repayment will be initiated. This transfer of ownership is automatic and the transaction gets recorded to a blockchain, shared among the nodes and can be checked at any time.</span> <button class="read">read more</button></p>
						</a></li>

				 	<li><a href="#gigafactory"><p class="large-text" id="gigafactory">Tesla Gigafactory</p>
						<img src="facts/gigafactory.jpg" id="myImg1" class="factimg" alt="Gigafactory Nevada">
						<p class="small-text"> Do you know what the most important thing Tesla makes ? Elon Musk calls it a Giant machine that builds a machine. A futuristic manufacturing facility primarily producing lithium-ion batteries - 13 million per day and electric motors for the Tesla Model 3, Tesla’s cheapest-ever car, plus the Powerwall and Powerpack energy storage systems designed to work with renewable sources. It's called the "GIGAFACTORY". According to Musk Gigafactory will help Tesla in making affordable batteries that can be used to store renewable energy like solar. Gigafactory is being built as a net-zero facility. There'll be over 200,000 solar panels on the roof, with the largest array of solar panels anywhere to provide most of the building’s energy, paired with Tesla’s batteries.<span class="dots">...</span><span class="more"> Currently Tesla produces 60 percent of the Globe's EV batteries and is planning to ramp production to 500,000 cars per year which would require today's entire worldwide supply of lithium-ion batteries. With battery production more than all other carmakers combined in terms of kWh, Tesla is accelerating to achieve production of terawatt-hour battery (per year), the million mile battery for future cars which will hold more charge and have lower price point. Tesla's current cost to manufacture a battery cell is $116 per KWH which is far ahead of the industry- $146 per KWH. Tesla's project Road runner aims to reduce costs to $100 per KWH by 2021. Building a massive facility which runs on 100% renewable energy source as the Gigafactory means increased production, decreased cost, reduction of waste, and the simple optimization of locating most manufacturing processes under one roof. There are 5 proposed Gigafactory projects around globe - Nevada, New York, Berlin, Shanghai and Texas. The size of each Gigafactory is massive with the Sparks, Nevada based facility being the biggest. On completion it will be the biggest building in the world by footprint about 15 million square feet of land, and the second biggest by volume. It's large enough to house 107 NFL football fields or 93 Boeing 747s. Working alongside factories 7000 employees, are a team of automated robots that help move materials using digital maps between workstations faster and lift heavier loads staying charged for 19 hours. It's been designed with a unique chilled water plant that makes use of the cool desert air at night to store chilled water and pump it through the workstations releasing heat from energy intensive manufacturing processes. Tesla's approach to innovation offers enduring lessons for anyone, especially in terms of how to win support for an idea and how to bring new technologies to market. Could you ever imagine a car travelling in space ? Spacex's Falcon Heavy rocket on February 2018, carried a cherry-red Tesla Roadster which once belonged to Elon Musk, with a space-suited mannequin 'Starman' strapped in the driver’s seat listening to a David Bowie soundtrack playing on a loop, and it has sailed beyond Mars.</span> <button class="read">read more</button></p>
						</a></li>

				  	<li><a href="#voyager"><p class="large-text" id="voyager">Voyagers</p>
						<img src="facts/goldernrecord.jpg" id="myImg" class="factimg" alt="Goldern Record">
						<p class="small-text">Have you ever heard about the Voyager mission ? It's the real interstellar mission and the most distant human-made object in space. In 1977, Voyager 1 & Voyager 2 were launched aboard a Titan-Centaur rocket from Cape Canaveral, Florida, with the mission objective to explore the Solar system beyond the neighborhood of the outer planets to the outer limits of the Sun's sphere of influence, and possibly beyond. After exploring volcanic activities on Jupiter's moon IO and closely studying the intricacies of Saturn's rings, with the additional flybys of the two outermost planets Uranus and Neptune the Voyager 1 made the historic entry into interstellar space in 2012 followed by Voyager 2 in 2018.<span class="dots">...</span><span class="more"> Since it's launch in 1977 Voyager 1 has travelled more than 22.3 billion km at a speed of about 3.6 AU per year and Voyager 2 has travelled a distance of 18.5 billion km at a speed of about 3.3 AU per year from sun. Being so far from earth how does the Voyager communicate ? A 20 KiloWatt signal is transmitted from Earth to Voyager using radio waves which takes almost 20 hours for the signal to reach the space probe where it's sensitive 3.4 meter diameter antenna picks up the signal. Voyager sends information and pictures taken in realtime back to the Deep Space Network (DSN), a collection of big radio antennas, powerful enough to make sense of the faint signals received which is 20 billion times weaker than what's needed to run a digital watch. These antennas are located in California, Canberra and Madrid. Those sites are almost evenly spaced around the planet which means as the Earth turns, we never lose sight of a spacecraft. These spacecrafts are continuing to characterize the outer solar system environment and search for the heliopause boundary, the outer limits of the Sun's magnetic field and outward flow of the solar wind, until around the year 2025 when their ability to generate adequate electrical power for continued science instrument operation will come to an end. A very interesting fact of these spacecrafts is they carry a phonograph, gold-plated copper disk, known as the 'GOLDERN RECORD'. This 12-inch disk contains sounds and images selected to portray the diversity of life and culture on Earth. It's kind of a time capsule, intended to communicate a story of our world to extraterrestrials. </span> <button class="read">read more</button></p>
						</a></li>

					<li><a href="#hyperloop"><p class="large-text" id="hyperloop">Hyperloop</p>
						<img src="facts/hyperloop.jpg" id="myImg1" class="factimg" alt="Virgin Hyperloop One">
						<p class="small-text"> Billed as the fastest way to cross the surface of the earth, hyperloop represents the greatest leap in transport infrastructure for generations. With passengers sitting in pods that travel at airline speed through pressurised tubes using electric propulsion and magnetic levitation, the concept promises to slash journey times between major cities from several hours to a matter of minutes. Whilst it may feel like science fiction, hyperloop is now on the cusp of becoming a reality. Hyperloop was first concieved in 2012 by Tech entrepreneur Elon Musk, and engineers from both SpaceX and Tesla Motors worked for 9 months on creating a reasonable engineering and cost-assessment proposal for the hyperloop which was released in August 2013. <span class="dots">...</span><span class="more">Design of a realistic hyperloop poses numerous technical and economic challeges. Musk has set out his vision for a futuristic, super high-speed transportation pods that moves through a partial vacuum in steel tubes - addressing the two key factors that slow down conventional vehicle: Friction and Air resistance. To alleviate friction between the pod and the tube, one possible mechanism is the magnetic levitation using very large permanent magnets to suspend the pod above the bottom of the tube. However this idea is dismissed due to higher costs. In his proposal Musk suggested a second possible method similar to the concept of air bearings in an air hockey table, using a cushion of air to support pods and eliminate rolling resistance. Pod will be driven on an electromagnetic track laid on a tunnel floor and when current is fed through the track, the pod moves forward, accelerating until a speed where it lifts up and is guided by magnets. The hyperloop partially-vacuum tubes will operate at very low pressure to reduce air resistance and an electric compressor fan will be fixed on the nose of the pod to pump high-pressure air from in front of the pod towards the air bearings that will levitate the pod above the surface of tube and the pod will glide without applying much thrust - expected to reach a speed of 760mph. Musk believed a potential Los Angeles - San Francisco route could be traversed in about 30 minutes, compared to the 8 hour bus ride, 4 hour train journey and convoluted 3 hour air travel between the 2 cities. The solar-powered tube track is designed to be immune to weather and Earthquakes and the smaller footprint pillars that lift tube above the ground can sway in case of an earthquake and each tube section can move flexibly if the terain shifts. SpaceX has announced an open competition, geared towards university students and independent engineering teams, to design and build the best Hyperloop pod. With this innovations and a completely automated departure system, Elon Musk dreams of the Hyperloop being the fastest, safest and most convenient form of travel in the world.</span> <button class="read">read more</button></p>
						</a></li>

						<div class="readmore" style="padding: 5%;">
						    <svg class="arrow-down">
						        <path class="a1" d="M0 0 L15 16 L30 0"></path>
						        <path class="a2" d="M0 10 L15 26 L30 10"></path>
						        <path class="a3" d="M0 20 L15 36 L30 20"></path>
						    </svg>
							<div class="morecontent">See more</div>
						</div>

					<div class="hidecontent">
					<li><a href="#boringcompany"><p class="large-text" id="boringcompany">The Boring Company</p>
						<img src="facts/theboringcompany.jpg" id="myImg" class="factimg" alt="Loop Test tunnel in Hawthorne, California">
						<p class="small-text">Frustrated with the Los Angeles traffic, Elon Musk thought it would be a good idea to create an underground network of tunnels which could ease conjestion in and around cities and so he founded "The Boring Company (TBC)". TBC came up with a plan to construct safe, fast-to-dig, low-cost, and zero-emissions transportation tunnels that is called the 'Loop'. The Loop is a high-speed underground public transportation system in which passengers are transported in autonomous electric vehicles (AEV) known as "skates" from point A to point B bypassing the surface traffic.You might be wondering how's it different than an underground subway. <span class="dots">...</span><span class="more"> One key distinction is Loop is designed to be an "express" transport system more resembling an underground highway where there will be a Main Artery Tunnel and side tunnels leading to AEV entry/exits like highway on and off-ramps. Unlike the train lines where there are too many stops, the loop can have less pickup/drop stations and passengers can choose to enter and exit the tunnel from any point skipping all the exits in the middle which will allow AEVs to travel at a higher speed of about 150 MPH compared to 15-20 mph of a subway train. Like the typical subway entrances, loops will have subsurface stations allowing passenger loading and unloading at designated passenger pick up/drop off areas at the surface. Each tunnel will be connected to the surface through a set of ramps(a combination of elevators, escalators or stairs), one designated for inbound AEVs and one for outbound AEVs. Inbound AEVs will emerge from tunnels onto the surface and complete their trips to the designated surface station area and an AEV departing a station will enter the tunnel through the outbound ramp. The size of boring tunnels is significantly smaller(14 ft. in diameter) than the regular subways which allows for exponentially lower construction costs - $10 million compared to $200 - 500 million per mile for subway. Sensors are placed throughout the tunnel to measure temperature, voltages, air flow, gas levels(oxygen, carbon monoxide, methane, etc), and AEV position, along with a ventilation system designed in case of vehicle fire loads. You can take your own private vehicles into the tunnel and the stabilized electric skates will carry your vehicle to a desired location directly. Even if you are a pedestrian you can board a public High-occupany AEV and it is quite likely that a boring entry point will be closer to your starting point and destination as they can easily be built accross the city - a subsurface station could be of same size as a parking lot. Also traffic won't be an issue as the vehicles are expected to be autonomous and it's estimated that this underground public transportation system will be capable of carrying up to 10,000 people per direction per hour. TBC have also made plans to connect the loop with the existing transportation system hubs and other important locations throughout the region- one being the Freight tunnel.</span> <button class="read">read more</button></p>
						</a></li>

				  	<li><a href="#graphicscard"><p class="large-text" id="graphicscard">Inside a Graphics Card</p>
						<img src="facts/graphicscard.jpg" id="myImg1" class="factimg" alt="Graphics Card Components">
						<p class="small-text">Have you ever wondered what's inside your Graphics card ? A graphics card is a Printed Circuit Board, a large span of electrical components and conductive materials attached into a wafer or substrate which houses four main components: a GPU processor, Video RAM, Voltage Regulaor Module and an input/output system (BIOS) chip which stores the card's settings and performs diagnostics on the memory, input and output at startup. A GPU, stands for Graphics Processing Unit, sounds like a CPU but unlike in CPU which is better at handling a number of random tasks, GPU takes large amounts of data and performs linear and repetitive data computations. Specifically, a GPU, consisting of thousands of cores, is designed for performing complex math and geometric calculations for graphics rendering.<span class="dots">...</span><span class="more"> To improve the image quality, it uses a Full scene anti aliasing(FSAA) to smooth the edges of 3D objects, and a Anisotropic filtering(AF) to make images look crisper. The GPU produces a lot of heat while computing and it is usually located under heat sinks and fans installed on a metal casing in a graphics card. The heat sinks direct the heat towards fans to expel the heat acting as a coolant. A voltage Regulator Module (VRM) supplies electricity to the GPU at a constant rate so that there's never any kind of surge or a depreviation of power. VRM is especially important for overclocking a GPU. Overclocking a GPU increases its performance by boosting the speed that the processor works at, which increases the temperature and power drawn and the VRM controls the voltage supplied to GPU. While creating images a GPU needs a temporary memory known as the VRAM (GDDR6) to hold information and completed pictures. VRAM stores information about each pixel, it's color and it's screen location acting as a frame buffer until it's time to display them and it's typically dual ported (read and write at the same time). The VRAM is connected to a digital-to-analog converter known as the RAMDAC, that translates the image into an analog signal that the monitor can use and sends the final picture to the monitor through a cable. Most graphics cards have two monitor connections - a DVI connector which supports LCD screens and a VGA connector which supports CRT screens. The Graphics card is connected to the computer through the motherboard using a Peripheral Component Interconnect Express(PCIe) interface which supplies power to the card and let's it communicate with the CPU. Some of the latest graphics cards have direct connection to the computer's power supply as they require more power than the motherboard can provide. In addition to connections for the motherboard and monitor, graphics cards also have connections for TV display, Analog video cameras and Digital cameras. APIs such as OPEN GL and DIRECTX help PC's hardware and software communicate more efficiently by providing instructions for complex tasks, like 3-D rendering. Graphics cards have come a long way since the very first one called Monochrome Display Adapter (MDA) was introduced by Ibm in 1981, which provided text-only displays of green or white text on a black screen. Now, the minimum standard for new video cards is Video Graphics Array (VGA), which allows 256 colors.</span> <button class="read">read more</button></p>
						</a></li>

				  <li><a href=""></a></li>
				  <li><a href=""></a></li>
				  <li><a href=""></a></li>

				</div>
				</ul>

		</div>

	<div id="myModal" class="modal">
		<span class="close">&times;</span>
		<img class="modal-content" id="img01">
		<div id="caption"></div>
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

    <div class="footer"><i class="fa fa-code" aria-hidden="true" style="font-weight: bolder;"></i> by Mohit Shetty</div>
    
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

	<script>
		function myFunction2() {
			if ($("#myInput").val()!=""){
			   	$(".hidecontent").css('display','block');
			   	$(".morecontent").css('display','none'); 
			   	$(".readmore").css('display','none');				
			}
			else{
			   	$(".hidecontent").css('display','none');
			   	$(".morecontent").css('display','block'); 
			   	$(".readmore").css('display','block');
		   }
		}
	</script>

	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementsByClassName("factimg");

		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");

		for (var i=0;i<img.length;i++){
			var images=img[i];
			images.onclick = function(){
			  modal.style.display = "block";
			  
			  modalImg.src = this.src;
			  captionText.innerHTML = this.alt;
			}
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		  modal.style.display = "none";
		}
	</script>

	<script>
		$(document).ready(function(){
			$(".read").click(function(){
				$(this).prev().toggle();
				$(this).siblings('.dots').toggle();
				if ($(this).text()=='read more'){
					$(this).text('read less');

				}
				else{
					$(this).text('read more');	
				}
			});
		});

	</script>

	<script>
		$(document).ready(function(){
			$(".morecontent").click(function(){
			if ($(this).text()=='See more'){
					$(this).text('See less');
					$(".hidecontent").css('display','block');
				}
				else{
					$(this).text('See more');
					$(".hidecontent").css('display','none');
				}
			});
		});

	</script>

</body>
</html>