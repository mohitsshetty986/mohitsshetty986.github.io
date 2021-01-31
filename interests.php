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
  <link rel="stylesheet" href="style/fstdropdown.css">
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
        "BEWARE OF MONOTONY, IT’S THE MOTHER OF ALL THE DEADLY SINS."
        <br>- Edith Wharton
        <br>
    </p>
  </div>
  <br>
  <svg class="arrow-down">
    <path class="a1" d="M0 0 L15 16 L30 0"></path>
    <path class="a2" d="M0 10 L15 26 L30 10"></path>
    <path class="a3" d="M0 20 L15 36 L30 20"></path>
  </svg>  
  <br>
  <br>     

    <div class="container">
        <center><select type="text" class='fstdropdown-select' onchange="location = this.value;">
            <option value="">Curious about something?</option>
            <option value="#altair">Altair 8800</option>
            <option value="#blockchain">Blockchain</option>
            <option value="#gigafactory">TESLA Gigafactory</option>
            <option value="#voyager">Voyagers I & II</option>
            <option value="#hyperloop">Hyperloop Transport</option>
            <option value="#boringcompany">The Boring Company</option>
            <option value="#graphicscard">Graphics Card</option>
            <option value="#rosettastone">Rosetta stone</option>
            <option value="#starship">SpaceX Starship</option>
            <option value="#warofroses">War of the Roses</option>
        </select></center>
        
        <ul id="myUL">
          <li><a href="#altair"><p class="large-text" id="altair">Altair 8800: The First PC</p>
            <img src="facts/altair-8800.jpg" id="myImg1" class="factimg" alt="The January 1975 article on Altair 8800">
            <p class="small-text">It goes without saying that the personal computer revolutionized businesses and homes around the globe, but what was the very first one that served as the de facto standard for the PCs of today? We have to travel back to 1969 when an engineer working at Kirtland Airforce base in New Mexico, Henry Edward Roberts together with 3 other colleagues, with their electronics background decided to sell small kits for model rocket hobbyists. They founded "Micro Instrumentation and Telemetry Systems" (MITS) in Roberts' garage and started selling radio transmitters and instruments for model rockets which didn't achieve market success and they switched to selling calculator kits.<span class="dots">...</span><span class="more"> In April 1974, Intel launched the 8080A CPU, which was capable of addressing up to 64kb of RAM and so based on several improved models of calculator kits, Robert decided to design an Intel 8080 computer. There was a sizable customer base at schools, colleges, electronic enthusiasts who knew about and wanted to have computers and the available Intel 8008 based computer at the time was not powerful enough to run a high level language like BASIC. Robert came up with the first prototype of Intel 8080 in October 1974 which was more powerful than Intel 8008, designed as an expandable system, that opened it up to all sorts of applications. Les Solomon from the popular magazine "Popular Electronics" who knew about Robert's work thought of the Intel 8080 computer as an attention-grabbing cover story and thus the Altair 8800 (Popular Electronics editors came up with this name and not Roberts) was launched in market and was an instant success with 40000 units sold. Initially programming the Altair was tedious with no keyboards and users had to repeatedly toggle switches corresponding to a microprocessor instruction in binary and use enter switch to load the code into memory until all the instructions of a complete program were in place. The rudimentary computer was upgraded to a $439 Computer kit that had 2 memory boards of 1024 words and 4096 words, Parallel and Serial Interface Boards, a paper tape reader for storage, Audio Cassette Interface Board, a 300KB floppy drive and a Teletype. After an article release on Altair in January 1975, Roberts was contacted by a Harvard undergrad Bill Gates and his friend Paul Allen who offered to create a BASIC interpreter, using a self-made simulator. After they had a version working, Allen flew to MITS, to deliver the first program which was also the "Micro-Soft's founding product Altair BASIC". The first program ever typed in Altair BASIC was "print 2+2" and after typing "run" it typed back the correct answer: "4". The January 1975 article also led to the creation of Homebrew Computer Club of electronic hobbyists headed by the Apple Computer founders Steve Wozniack and Steve Jobs.</span> <button class="read">read more</button></p>
            </a></li>

          <li><a href="#blockchain"><p class="large-text" id="blockchain">Blockchain Explained</p>
            <img src="https://github.com/mohitsshetty986/secondary/blob/main/blockchain.JPG?raw=true" id="myImg" class="factimg" alt="Blockchain Usecases">
            <p class="small-text">What is a Blockchain ? As the name suggests, it's a chain of blocks that contains information. This technique was originally described in 1991 intended to timestamp digital documents so that it’s not possible to backdate or tamper with them. It went by mostly unused until 2009 when Satoshi Nakamoto created the digital cryptocurrency Bitcoin. A blockchain is a distributed ledger completely open to anyone with an interesting property of data being immutable. Each block in a blockchain contains some "Data" which depends on the type of blockchain, for e.g. Bitcoin stores transaction details such as sender, receiver and amount of coins. Second element is the "Hash" which is like an<span class="dots">...</span><span class="more"> unique fingerprint identifying the block and it's contents and changing something inside block changes the hash. The third element is the "Hash of previous block" effectively creating a chain of blocks. The first block is a special case which doesn't point to it's previous block known as the "Genesis block", the first block of Bitcoin ever mined. If a block is changed then it's hash changes and all the following blocks will no longer have a valid hash of the previous block making them invalid. Hashes are not secure enough as computers these days are fast and could effectively tamper with a block and recalculate all the hashes of other blocks within seconds to make the blockchain valid again. So we have something called as the "Proof-of-work" mechanism that slows down the creation of new blocks. For bitcoin, it takes 10 mins to create the proof-of-work and add a new block to the chain. This makes it hard to tamper with a block as the proof-of-work will need to be recalculated for all the blocks. Another way Blockchains secure themseleves is by using a peer-to-peer network to manage the chain instead of using a central entity. It's a globally distributed network of connected computers or nodes(different types based on their functions on a network) constantly exchanging the latest blockchain data with each other so all nodes stay up to date. When someone joins the network they get the full copy of the blockchain and the nodes verify if everything is in order. When a miner(a type of node) in the network creates a new block, it's sent to everyone in the network to verify the block hasn't been tampered with and by creating consensus all the nodes agree about what blocks are valid and the invalid ones will be rejected. Blockchains are constantly evolving with the recent development being the "Smart Contracts", which brings transparency and simplicity in business transactions. Smart contracts are lines of code stored on a blockchain and automatically execute when predetermined terms and conditions are met. For example when you plan to buy a car at a dealership and you need financing for that, then it will require a credit check and several forms to fill out with your personal information and in the process you'll interact with several different people, the salesperson, finance broker, lender which will add various commissions and fees to the base price of the car. with Smart contracts this complex process with several intermediaries can be streamlined with Lenders making a decision about credit from your identity stored on a blockchain and then, a smart contract would be created between your bank, the dealer and the lender. Once the funds are released to the dealer, the lender will hold the car's title and based on the agreed terms repayment will be initiated. This transfer of ownership is automatic and the transaction gets recorded to a blockchain, shared among the nodes and can be checked at any time.</span> <button class="read">read more</button></p>
            </a></li>

          <li><a href="#gigafactory"><p class="large-text" id="gigafactory">TESLA Gigafactory</p>
            <img src="facts/gigafactory.jpg" id="myImg1" class="factimg" alt="Gigafactory Nevada">
            <p class="small-text"> Do you know what the most important thing Tesla makes ? Elon Musk calls it a Giant machine that builds a machine. A futuristic manufacturing facility primarily producing lithium-ion batteries - 13 million per day and electric motors for the Tesla Model 3, Tesla’s cheapest-ever car, plus the Powerwall and Powerpack energy storage systems designed to work with renewable sources. It's called the "GIGAFACTORY". According to Musk Gigafactory will help Tesla in making affordable batteries that can be used to store renewable energy like solar. Gigafactory often by its employees as "Alien dreadnaught" because of it's design, is being built as a net-zero facility. There'll be over 200,000 solar panels on the roof, with the largest array of solar panels anywhere<span class="dots">...</span><span class="more"> to provide most of the building’s energy, paired with Tesla’s batteries. Currently Tesla produces 60 percent of the Globe's EV batteries and is planning to ramp production to 500,000 cars per year which would require today's entire worldwide supply of lithium-ion batteries. With battery production more than all other carmakers combined in terms of kWh, Tesla is accelerating to achieve production of terawatt-hour battery (per year), the million mile battery for future cars which will hold more charge and have lower price point. Tesla's current cost to manufacture a battery cell is $116 per KWH which is far ahead of the industry- $146 per KWH. Tesla's project Road runner aims to reduce costs to $100 per KWH by 2021. Building a massive facility which runs on 100% renewable energy source as the Gigafactory means increased production, decreased cost, reduction of waste, and the simple optimization of locating most manufacturing processes under one roof. Rail cars will transport the raw materials from mines to the facility and that will be turned into batteries. The factory will be decked out with a state-of-the-art recycling system and will provide recycling capability for old battery packs. There are 5 proposed Gigafactory projects around globe - Nevada, New York, Berlin, Shanghai and Texas. The size of each Gigafactory is massive with the Sparks, Nevada based facility being the biggest. On completion it will be the biggest building in the world by footprint about 15 million square feet of land, and the second biggest by volume. It's large enough to house 107 NFL football fields or 93 Boeing 747s. Working alongside factories 7000 employees, are a team of automated robots that help move materials using digital maps between workstations faster and lift heavier loads staying charged for 19 hours. It's been designed with a unique 1.5 million gallons chilled water plant that makes use of the cool desert air at night to store chilled water and pump it through the workstations releasing heat from energy intensive manufacturing processes. Tesla's approach to innovation offers enduring lessons for anyone, especially in terms of how to win support for an idea and how to bring new technologies to market. Could you ever imagine a car travelling in space ? Spacex's Falcon Heavy rocket on February 2018, carried a cherry-red Tesla Roadster which once belonged to Elon Musk, with a space-suited mannequin 'Starman' strapped in the driver’s seat listening to a David Bowie soundtrack playing on a loop, and it has sailed beyond Mars. It would take 100 Gigafactories to power the whole world, and many other companies need to follow Tesla to achieve such scale of producing sustainable energy.</span> <button class="read">read more</button></p>
            </a></li>

            <li><a href="#voyager"><p class="large-text" id="voyager">Voyagers: Interstellar Mission</p>
            <img src="facts/goldernrecord.jpg" id="myImg" class="factimg" alt="Goldern Record">
            <p class="small-text">Have you ever heard about the Voyager mission ? It's the real interstellar mission and the most distant human-made object in space. In 1977, Voyager 1 & Voyager 2 were launched aboard a Titan-Centaur rocket from Cape Canaveral, Florida, with the mission objective to explore the Solar system beyond the neighborhood of the outer planets to the outer limits of the Sun's sphere of influence, and possibly beyond. After exploring volcanic activities on Jupiter's moon IO and closely studying the intricacies of Saturn's rings, with the additional flybys of the two outermost planets Uranus and Neptune (an alignment of jupiter, saturn, uranus and neptune occurs after 175 years) the Voyager 1<span class="dots">...</span><span class="more"> made the historic entry into interstellar space in 2012 followed by Voyager 2 in 2018. Since it's launch in 1977 Voyager 1 has travelled more than 22.3 billion km at a speed of about 3.6 AU per year and Voyager 2 has travelled a distance of 18.5 billion km at a speed of about 3.3 AU per year from sun. All of our knowledge about Uranus and Neptune comes from voyager 2. In 1986, Voyager 2 made a fascinating discovery showing Uranus vented a giant blob of gas 400 km across and 200 km long called plasmoid into space. As the voyagers are moving farther from solar system, the density of space is increasing which has challenged the accepted notion of space being a vacuum. In the solar system the solar wind has an average proton and electron density of 3-10 particles per cubic centimeter and the plasma density is 0.002 electrons per cc near the edge of solar system. Voyager 2 in 2019 showed an increase in density to about 0.12 electrons per cc. One theory suggests, the interstellar magnetic field lines become stronger as they bend over the heliopause. Heliopause is the place where solar winds eminating from our sun is no longer strong enough to push the interstellar winds from the surrounding stars. Another theory is, the material blown by interstellar wind slows down at the heliopause. Being so far from earth how does the Voyager communicate ? A 20 KiloWatt signal is transmitted from Earth to Voyager using radio waves which takes almost 20 hours for the signal to reach the space probe where it's sensitive 3.4 meter diameter antenna picks up the signal. Voyager sends information and pictures taken in realtime back to the Deep Space Network (DSN), a collection of big radio antennas, powerful enough to make sense of the faint signals received which is 20 billion times weaker than what's needed to run a digital watch. These antennas are located in California, Canberra and Madrid. Those sites are almost evenly spaced around the planet which means as the Earth turns, we never lose sight of a spacecraft. These spacecrafts are continuing to characterize the outer solar system environment and search for the heliopause boundary, the outer limits of the Sun's magnetic field and outward flow of the solar wind, until around the year 2025 when their ability to generate adequate electrical power for continued science instrument operation will come to an end. A very interesting fact of these spacecrafts is they carry a phonograph, gold-plated copper disk, known as the 'GOLDERN RECORD'. This 12-inch disk contains sounds and images selected to portray the diversity of life and culture on Earth. It's kind of a time capsule, intended to communicate a story of our world to extraterrestrials. </span> <button class="read">read more</button></p>
            </a></li>

          <li><a href="#hyperloop"><p class="large-text" id="hyperloop">Hyperloop Transportation</p>
            <img src="facts/hyperloop.jpg" id="myImg1" class="factimg" alt="Virgin Hyperloop One">
            <p class="small-text"> Billed as the fastest way to cross the surface of the earth, hyperloop represents the greatest leap in transport infrastructure for generations. With passengers sitting in pods that travel at airline speed through pressurised tubes using electric propulsion and magnetic levitation, the concept promises to slash journey times between major cities from several hours to a matter of minutes. Whilst it may feel like science fiction, hyperloop is now on the cusp of becoming a reality. Hyperloop was first concieved in 2012 by Tech entrepreneur Elon Musk, and engineers from both SpaceX and Tesla Motors worked for 9 months on creating a reasonable engineering and cost-assessment proposal for<span class="dots">...</span><span class="more"> the hyperloop which was released in August 2013. Design of a realistic hyperloop poses numerous technical and economic challeges. Musk has set out his vision for a futuristic, super high-speed transportation pods that moves through a partial vacuum in steel tubes - addressing the two key factors that slow down conventional vehicle: Friction and Air resistance. To alleviate friction between the pod and the tube, one possible mechanism is the magnetic levitation using very large permanent magnets to suspend the pod above the bottom of the tube. However this idea is dismissed due to higher costs. In his proposal Musk suggested a second possible method similar to the concept of air bearings in an air hockey table, using a cushion of air to support pods and eliminate rolling resistance. Pod will be driven on an electromagnetic track laid on a tunnel floor and when current is fed through the track, the pod moves forward, accelerating until a speed where it lifts up and is guided by magnets. The hyperloop partially-vacuum tubes will operate at very low pressure to reduce air resistance and an electric compressor fan will be fixed on the nose of the pod to pump high-pressure air from in front of the pod towards the air bearings that will levitate the pod above the surface of tube and the pod will glide without applying much thrust - expected to reach a speed of 760mph. Musk believed a potential Los Angeles - San Francisco route could be traversed in about 30 minutes, compared to the 8 hour bus ride, 4 hour train journey and convoluted 3 hour air travel between the 2 cities. The solar-powered tube track is designed to be immune to weather and Earthquakes and the smaller footprint pillars that lift tube above the ground can sway in case of an earthquake and each tube section can move flexibly if the terain shifts. SpaceX has announced an open competition, geared towards university students and independent engineering teams, to design and build the best Hyperloop pod. With this innovations and a completely automated departure system, Elon Musk dreams of the Hyperloop being the fastest, safest and most convenient form of travel in the world.</span> <button class="read">read more</button></p>
            </a></li>

          <li><a href="#boringcompany"><p class="large-text" id="boringcompany">The Future Elon Musk is boring</p>
            <img src="facts/theboringcompany.jpg" id="myImg" class="factimg" alt="Loop Test tunnel in Hawthorne, California">
            <p class="small-text">Frustrated with the Los Angeles traffic, Elon Musk thought it would be a good idea to create an underground network of tunnels which could ease conjestion in and around cities and so he founded "The Boring Company (TBC)". TBC came up with a plan to construct safe, fast-to-dig, low-cost, and zero-emissions transportation tunnels that is called the 'Loop'. The Loop is a high-speed underground public transportation system in which passengers are transported in autonomous electric vehicles (AEV) known as "skates" from point A to point B bypassing the surface traffic.You might be wondering how's it different than an underground subway.  One key distinction is Loop is designed<span class="dots">...</span><span class="more"> to be an "express" transport system more resembling an underground highway where there will be a Main Artery Tunnel and side tunnels leading to AEV entry/exits like highway on and off-ramps. Unlike the train lines where there are too many stops, the loop can have less pickup/drop stations and passengers can choose to enter and exit the tunnel from any point skipping all the exits in the middle which will allow AEVs to travel at a higher speed of about 150 MPH compared to 15-20 mph of a subway train. Like the typical subway entrances, loops will have subsurface stations allowing passenger loading and unloading at designated passenger pick up/drop off areas at the surface. Each tunnel will be connected to the surface through a set of ramps(a combination of elevators, escalators or stairs), one designated for inbound AEVs and one for outbound AEVs. Inbound AEVs will emerge from tunnels onto the surface and complete their trips to the designated surface station area and an AEV departing a station will enter the tunnel through the outbound ramp. The size of boring tunnels is significantly smaller(14 ft. in diameter) than the regular subways which allows for exponentially lower construction costs - $10 million compared to $200 - 500 million per mile for subway. Sensors are placed throughout the tunnel to measure temperature, voltages, air flow, gas levels(oxygen, carbon monoxide, methane, etc), and AEV position, along with a ventilation system designed in case of vehicle fire loads. You can take your own private vehicles into the tunnel and the stabilized electric skates will carry your vehicle to a desired location directly. Even if you are a pedestrian you can board a public High-occupany AEV and it is quite likely that a boring entry point will be closer to your starting point and destination as they can easily be built accross the city - a subsurface station could be of same size as a parking lot. Also traffic won't be an issue as the vehicles are expected to be autonomous and it's estimated that this underground public transportation system will be capable of carrying up to 10,000 people per direction per hour. TBC have also made plans to connect the loop with the existing transportation system hubs and other important locations throughout the region- one being the Freight tunnel.</span> <button class="read">read more</button></p>
            </a></li>

          <li><a href="#graphicscard"><p class="large-text" id="graphicscard">What's inside a Graphics Card</p>
            <img src="facts/graphicscard.jpg" id="myImg1" class="factimg" alt="Graphics Card Components">
            <p class="small-text">Have you ever wondered what's inside your Graphics card ? A graphics card is a Printed Circuit Board, a large span of electrical components and conductive materials attached into a wafer or substrate which houses four main components: a GPU processor, Video RAM, Voltage Regulaor Module and an input/output system (BIOS) chip which stores the card's settings and performs diagnostics on the memory, input and output at startup. A GPU, stands for Graphics Processing Unit, sounds like a CPU but unlike in CPU which is better at handling a number of random tasks, GPU takes large amounts of data and performs linear and repetitive data computations. Specifically, a GPU, consisting of thousands<span class="dots">...</span><span class="more"> of cores, is designed for performing complex math and geometric calculations for graphics rendering. To improve the image quality, it uses a Full scene anti aliasing(FSAA) to smooth the edges of 3D objects, and a Anisotropic filtering(AF) to make images look crisper. The GPU produces a lot of heat while computing and it is usually located under heat sinks and fans installed on a metal casing in a graphics card. The heat sinks direct the heat towards fans to expel the heat acting as a coolant. A voltage Regulator Module (VRM) supplies electricity to the GPU at a constant rate so that there's never any kind of surge or a depreviation of power. VRM is especially important for overclocking a GPU. Overclocking a GPU increases its performance by boosting the speed that the processor works at, which increases the temperature and power drawn and the VRM controls the voltage supplied to GPU. While creating images a GPU needs a temporary memory known as the VRAM (GDDR6) to hold information and completed pictures. VRAM stores information about each pixel, it's color and it's screen location acting as a frame buffer until it's time to display them and it's typically dual ported (read and write at the same time). The VRAM is connected to a digital-to-analog converter known as the RAMDAC, that translates the image into an analog signal that the monitor can use and sends the final picture to the monitor through a cable. Most graphics cards have two monitor connections - a DVI connector which supports LCD screens and a VGA connector which supports CRT screens. The Graphics card is connected to the computer through the motherboard using a Peripheral Component Interconnect Express(PCIe) interface which supplies power to the card and let's it communicate with the CPU. Some of the latest graphics cards have direct connection to the computer's power supply as they require more power than the motherboard can provide. In addition to connections for the motherboard and monitor, graphics cards also have connections for TV display, Analog video cameras and Digital cameras. APIs such as OPEN GL and DIRECTX help PC's hardware and software communicate more efficiently by providing instructions for complex tasks, like 3-D rendering. Graphics cards have come a long way since the very first one called Monochrome Display Adapter (MDA) was introduced by Ibm in 1981, which provided text-only displays of green or white text on a black screen. Now, the minimum standard for new video cards is Video Graphics Array (VGA), which allows 256 colors.</span> <button class="read">read more</button></p>
            </a></li>

          <li><a href="#rosettastone"><p class="large-text" id="rosettastone">Rosetta stone</p>
            <img src="facts/rosettastone.jpg" id="myImg" class="factimg" alt="The Rosetta Stone, basalt slab from Fort Saint-Julien, Rosetta (Rashīd), Egypt, 196 BCE; is in the British Museum, London.">
            <p class="small-text">In July 1799, during Napoleon Bonaparte's military invasion of Egypt, a group of french soldiers while working to strenghten the defenses of a sunbaked fort near the Nile Delta town of Rosetta(modern day Rashid) accidentally made a groundbreaking archaeological discovery of a 44-inch long, 30-inch wide chunk of black granodiorite, which is known to us as the Rosetta stone. On close inspection of this slab (a broken part of a bigger stone slab), Pierre-Francois Bouchard, the engineer in charge, noticed that it was covered in ancient text in not one but three different scripts which held historical importance. The meaning of Egyptian hieroglyphics had been lost since the dying days of Roman Empire, but with it's<span class="dots">...</span><span class="more"> triple inscription, the stone offered scholars a chance to decipher the ancient symbols, making the find the key to this remarkable period in history. From ancient coffins such as the sarcophagus of the last Egyptian pharaoh to the limestone list of Egyptian rulers excavated from the Temple of Ramses II, there's almost no Ancient Egyptian work of art today, that doesn't include scripts and it's very clear how important writing was to ancient Egyptian art. Although we look back more than 5000 years, the beginnings of Ancient Egyptian culture, Rosetta stone was made during the reign of Ptolemy V (in 9th year of his reign), a period that follows Alexander the Great's conquest of Ancient Egypt (Ptolemaic period - 305 to 30 BCE, until Ancient Rome took over in 30 BCE). During this period Egypt was ruled by Ptolemies who were essentially Greeks and the capital city of Alexandria was found and Greek laws were imposed. Greek had become the official language of Egypt, but by this date there were many Egyptians, other than priests, who were illiterate and would have written the Egyptian language in Demotics. There was a power struggle when king Ptolemy V (r. 204–181 BCE) who was only 6, came to power and in need of allies he looked to the ancient priestly class to help him assert his power and bring stability in his kingdom. The writing on the Stone reflects this historical moment in Egypt and is an official message, called a decree, saying that the priests of a temple in Memphis (in Egypt) supports the king Ptolemy V, which is copied on to large stone slabs called stelae, which were put in every temple in Egypt. The Rosetta Stone at the very top, features 14 lines in hieroglyphic, the Sacred Writing of the priests; 32 lines in the center, are in Demotic - used for everyday purposes in ancient Egypt (the language of the people) and; 53 lines in Ancient Greek - the language of the administration or the rulers of Egypt, and all three inscriptions say the same thing in three different scripts. Soon after the end of the 4th century AD, when hieroglyphs had gone out of use, the knowledge of how to read and write them disappeared and so the european scholars used the Greek inscription on this stone as the key to decipher the egyptian hieroglyphs. This decree speaks about the victory of Ptolemy V over the rebelling egyptians who're against greek rule and on the other hand also shows a political compromise, which gives concession to the priests to remain in Memphis, a historically great Ancient Egyptian city, who before this, once a year had to travel to the capital of Alexandria even though it was in ancient Egypt. This decree also gives the priests a tax cut. An English physicist named Thomas Young (1773–1829), was the first to show that some of the hieroglyphs on the Rosetta Stone are the sounds of a royal name, that of Ptolemy by deciphering the cartouche(oval figures enclosing hieroglyphs) as the name of Ptolemy. Young also discovered the way in which hieroglyphic signs are read, by examining the direction in which the bird and animal characters are faced. In 1821, French scholar Jean-François Champollion started where Young had left off. He established an entire list of signs with their Greek equivalents becoming the first Egyptologist to realize that some of the signs were alphabetic, some syllabic, and some determinative, standing for the whole idea or object previously expressed. This 2,200-year-old slab is responsible for rescuing ancient Egypt from the mists of time and the key that unlocked the secrets of a civilization.</span> <button class="read">read more</button></p></a></li>
          <li><a href="#starship"><p class="large-text" id="starship">SpaceX Starship</p>
            <img src="facts/starship.jpg" id="myImg1" class="factimg" alt="SpaceX first Starship prototype (left) stands next to the Falcon 1 rocket at the company's South Texas site">
            <p class="small-text">"That's one small step for man, one giant leap for mankind", Neil Armstrong's Famous line. Astronauts first walked on the moon in 1969, and if you ask people back then what they thought space missions would look like now, they might be surprised to hear that the last time human beings went to the moon was in 1972. Even though things have been stagnant for decades, SpaceX appears to be changing the game when they sent NASA astronauts into orbit which represented more than just a mission to the International Space Station ISS, it meant a private company had built the infrastructure that could one day make space travel possible for everyone. According to Musk -<span class="dots">...</span><span class="more"> "There are many troubles in the world, that are important and we need to solve them, but we also need things that makes us excited to be alive, that makes us glad to wake up in the morning. Space exploration is one of those things." SpaceX has big ambitions and it plans to achieve them with the "Starship". Described as the World's most powerful launch vehicle, "Starship" is a reusable spacecraft that will transport humans to Earth's orbit, Moon and Mars, more like in the famous Star Wars series where the spacecraft could make interstellar journey. It's hard to grab the size of Starship but the Falcon 1 booster used for SpaceX's first successful launch in 2008 looks tiny besides it. Starship is made up of two parts: the spacecraft is stacked on top of a huge rocket booster called the "Super Heavy" and together they tower 120 meters high which is a bit longer than a football field and bigger than other super heavy rockets. It can carry upto 100 people and it's meant to hold a payload of upto 150 metric tons(weighing 21 African elephants), which requires a lot of power for liftoff. The ship is expected to use six monstrous Raptor engines filled with liquid oxygen and liquid methane engines, paired with a Super Heavy booster adding up to 37 more that's designed to help the ship leave Earth. After lifting Starship into orbit, the booster and the spacecraft will separate and the reusable Super Heavy returns to Earth while Starship goes along its journey and that journey can be anything from making trip to the ISS, missions to the moon, and ofcourse landing on Mars, which is not easy. Starship will be entering its atmosphere at a speed of 17000 miles/hour(25 times the speed of sound). It'll need to decelerate performing a specific maneuver in order to land and it's not just speed that Starship has to worry but heat as well. It'll be coming into the red planet's atmosphere really hot with the heat shield experiencing lot of wear and tear and so SpaceX switched its material from carbon fiber to steel to better withstand higher temperatures, plus its also cheaper. For making long trips to Mars or even beyond, the Starship might need to refuel. This involves a Starship which is in orbit around Earth, meeting a similarly-sized vehicle to refuel before it goes on the long trip. Starship only requires it's Super Heavy booster for launch so it seems possible that the Starship can meet a second vehicle launched from, for example the Moon, powered by its own Raptor, and once it reaches Mars it could refuel again there for another trip. But none of SpaceX's ambitions would be possible were not for the one standout feature of Starship: it is a fully reusable rocket which was never possible before. The company's plan from the beginning was to build an entirely reusable rocket and Falcon 9 was the stepping stone as SpaceX frequently reflew that rocket. Elon Musk quoted "You can imagine that if planes were not reusable, very few people would fly." Starship could be used for Earth-to-Earth transport carrying passengers or cargo from New York to Shanghai in 39 minutes. The spacecraft will land in a way that might attract some crowds - It'll fall back to earth like a skydiver and belly flop at a 60-degree angle before slowing to the ground, rotating vertically, and then arriving at its landing pad. Because all parts of the rocket will be reused, the cost of each launch will drop significantly. For eg, a NASA spaceshuttle flight was around $450 million compared to a Starship launch which could be as little as $2 million. At its factory in Boca Chica, a remote southeastern tip of Texas, SpaceX plans to churn out one Starship every 72 hours with a goal of having a fleet of about 1000 in service. Elon Musk's greatest ambition is to build nations in space including a city on Mars to ensure humanity's survival in case something happens on Earth. Starship took its first big step toward that goal with it's tiny hop in August, 2020 with a SN5 Starship prototype which looks like a floating tin can. It lept 150 meters in the air using a single Raptor engine, setting the stage for Starship's plan to land on the moon by 2022 with cargo and then with crew soon before ultimately sending people to Mars in 2024.</span> <button class="read">read more</button></p>
            </a></li>
          <li><a href="#warofroses"><p class="large-text" id="warofroses">War of the Roses</p>
            <img src="facts/warofroses.jpg" id="myImg" class="factimg" alt="War of the Roses Family tree">
            <p class="small-text">As far as we know, medieval England was never invaded by white walkers or terrorized by dragons, but it was shaken by a power struggle between two noble families spanning generations and involving a massive cast of characters with complex motives and shifting loyalties. If that sounds familiar, it's because the historical conflicts known as the Wars of the Roses served as the basis for much of the drama in Game of Thrones. The real-life seeds of war were sewn by the death of King Edward III in 1377. Edward's oldest son "Edward, The Black Prince" (1330 - 1376), had died before his father, but his 10 year old son, Richard II succeeded to the throne ahead of Edward's (Edward III) three surviving sons.<span class="dots">...</span><span class="more"> This skipping of an entire generation left lingering claims to the throne among their various offspring, particularly the Lancasters, descended from Edward's third son and the Yorks, descended from his fourth son. The name of the ensuing wars comes from the symbols associated with the two families, the white rose of York and the red rose of Lancaster. The Lancasters first gained the throne when Richard II was deposed by his cousin Henry IV in 1399. Despite sporadic unrest, their reign remained secure until 1422, when Henry V's death in a military campaign left an infant Henry VI as king. Weak-willed and dominated by advisors, Henry was eventually convinced to marry Margaret of Anjou to gain French support. Margaret was beautiful, ambitious, and ruthless in persecuting any threat to her power, and she distrusted Richard of York, most of all. York had been the king's close advisor and loyal General, but was increasingly sidelined by the Queen, who promoted her favorite supporters, like the Earls of Suffolk and Somerset. York's criticism of their inept handling of the war against France led to his exclusion from court and transfer to Ireland. Meanwhile, mounting military failures, and corrupt rule by Margaret and her allies caused widespread discontent, and in the midst of this chaos, Richard of York returned with an army to arrest Somerset and reform the court. Initially unsuccessful, he soon got his chance when he was appointed Protector of the Realm after Henry suffered a mental breakdown. However, less than a year later, Henry suddenly recovered, and the Queen convinced him to reverse York's reforms. York fled and raised an army once more. Though he was unable to directly seize the throne, he managed to be reinstated as Protector and have himself and his heirs designated to succeed Henry. But instead of a crown, York's head acquired a pike after he was killed in battle with the Queen's loyalists. His young son took up the claim and was crowned Edward IV. Edward enjoyed great military success against the Lancasters and Henry was captured while Margaret fled into exile with their reportedly cruel son, Edward of Westminster. But the newly crowned king made a tragic political mistake by backing out of his arranged marriage with a French princess to secretly marry the widow of a minor noble. This alienated his most powerful ally, the Earl of Warwick. Warwick allied with the Lancasters, turned Edward's jealous younger brother, George, against him, and even briefly managed to restore Henry as king, but it didn't last. Edward recaptured the throne, the Lancaster prince was killed in battle, and Henry himself died in captivity not long after. The rest of Edward IV's reign was peaceful, but upon his death in 1483, the bloodshed resumed. Though his 12 year old son was due to succeed him, Edward's younger brother Richard III (three siblings), declared his nephews illegitimate due to their father's secret marriage. He assumed the regency himself and threw the boys in prison. Though no one knows what ultimately became of them, after a while, the princes disappeared and Richard's power seemed secure. But his downfall would come only 2 years later from across the narrow sea of the English channel. Henry Tudor was a direct descendent of the first Duke of Lancaster, raised in exile after his father's death in a previous rebellion. With Richard III's power grad causing a split in the York faction, Henry won support for his royal claim. Raising an army in France, he crossed the Channel in 1485 and quickly defeated Richard's forces. And by marrying Elizabeth of York, elder sister of the disappeared princes, the newly crowned Henry VII joined the two roses, finally ending nearly a century of war. We often think of historical wars as decisive conflicts with clearly defined winners and losers. But the Wars of the Roses, like the fiction they inspired, show us that victories can be uncertain, alliances unstable, and even the power of kings as fleeting as the seasons.</span> <button class="read">read more</button></p>
          </a></li>

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

        $dir=glob('img/photos/{*.jpg,*.png}',GLOB_BRACE);

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
        <br>
        <br>
        <br>
        <br>
        <br>

    <br>
  </div>

	<script>
		$("[data-fancybox]").fancybox({
		  thumbs          : false,
		  hash            : true,
		  loop            : true,
		  keyboard        : true,
		  toolbar         : true,
		  animationEffect : true,
		  arrows          : true,
		  clickContent    : true
		});
	</script>
    
    <script src="script/fstdropdown.js"></script>

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

</body>
</html>