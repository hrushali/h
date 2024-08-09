

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="styles.css">
    
    <title>Lucky Hair Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <title>Owl Carousel</title>
    <style>
   
header {
    background-color:white;
    color:black;
    padding: 10px 0;
    text-align: center;
}

.heading img {
    height: 80px;
}


 /* navbar  */
.navbar {
    background-color:black;
    
    overflow: hidden;
    padding: 10px 0;
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

.navbar ul li {
    margin: 0 15px;
}

.navbar ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
}

.navbar ul li a:hover {
    background-color: black;
    border-radius: 5px;
    color: orange;
}

/* HOME */

#home {
  
    display:flex;
    flex-direction: column;
    padding:3px 200px;
    height: 400px;
    justify-content: center;
    align-items: center;
}
#home::before{ 
        content: "";
        position:fixed;
        background: url('https://media.blueyonder.com/wp-content/uploads/2020/05/Haircare-products_shutterstock_295555664.jpg') no-repeat  center/cover;
        height: 800px;
        top:-200px;
        left:0px;
        width: 100%;
        z-index: -1;
        opacity:0.7;
    }

/* HEADINGS */
.h-primary {
    font-size: 1.5em;
    font-weight: bold;
}


.h-secondary {
    font-size: 1.5em;
    font-weight: normal;
}


/* SERVICE */
#services-container {
    padding: 20px;
    background-color: black;
    opacity: 0.9;
}

#services {
    display: flex;
    justify-content: center;
    gap: 60px;
}

.column {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.box {
      border: 1px solid #ccc;
      padding: 20px;
      margin: 10px;
      border-radius: 5px;
      background-color:deeppink;
    }
    .center {
      text-align: center;
    }

/* CLIENT SECTION */
.marquee-container {
    overflow: hidden;
    white-space: nowrap;
}
.marquee {
    display: inline-block;
    animation: marquee 15s linear infinite;
}
.marquee img {
    margin-right: 20px; /* Adjust as needed */
    vertical-align: middle; /* Align images vertically */
    max-height: 40px; /* Limit the height of images */
}

#client-section {
    text-align: center;
    padding: 10px;
    background-color: white;
    height: 250px;
}
.client-section h1 {
    font-size: 2em;
    margin-bottom: 20px;
}
.marquee-container {
    display: flex;
    overflow: hidden;
    width: 100%;
    height: 150px; /* Adjust based on your image size */
    align-items: center;
    position: relative;
}
.marquee {
    display: flex;
    animation: marquee 15s linear infinite;
}
.marquee img {
    margin: 0px 10px;
}
@keyframes marquee {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}
        body {
            font-family: "Archivo Black", sans-serif;
        }
       
   /* APPOINTMENT BUTTON AND ADD BUTTON */
   
button {
  border-radius: 4px;
  background-color: rgb(206, 135, 206);
  border: none;
  color: #fff;
  text-align: center;
  font-size: 20px;
  padding: 2px 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 20px;
  margin-left: 450px;
  height: 50px;
  box-shadow: 0 10px 20px -8px rgba(0, 0, 0,.7);
}

button{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

button:after {
  content: '»';
  position: absolute;
  opacity: 0;  
  top: 14px;
  right: -20px;
  transition: 0.5s;
}

button:hover{
  padding-right: 20px;
  padding-left:8px;
 
}

button:hover:after {
  opacity: 1;
  right: 10px;
 
}
#skin{
    margin-left: 5px;
    margin-bottom: 50px;
    
}


#hair{
    margin-left: 100px;
  

}
#nail{
    margin-left: -100px;
    margin-top: -50px;
   

}
#h-primary {
    font-size: 1.5em;
    font-weight: bold;
    padding-left: 100px;
    margin-top: -300px;
    text-align: center;
    
}
.h-primary {
    font-size: 1.5em;
    font-weight: bold;
    margin-top: 40px;
   
}

#h-secondary {
    font-size: 1.5em;
    font-weight: normal;
    text-align: center;
   
  }

  /* REVIEW SECTION */
  #review-container{
    width: 100%;
    height: 100%;
    padding: 20px;
    background-color:none;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    opacity: 0.9;
}

.wrapper { 
	max-width: 900px; 
	width: 90%; 
	position: relative; 

} 

.wrapper i { 
	height: 50px; 
	width: 50px; 
	background:#8e44ad; 
	text-align: center; 
	line-height: 50px; 
	border-radius: 50%; 
	cursor: pointer; 
	position: absolute; 
	top: 50%; 
	font-size: 1.25 rem; 
	transform: translateY(-50%); 
	box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23); 

} 

.wrapper i:first-child { 
	left: -30px; 

} 

.wrapper i:last-child { 
	right: -22px; 

} 

.wrapper .carousel { 
	display: grid; 
	grid-auto-flow: column; 
	grid-auto-columns: calc((100% / 3) - 12px); 
	gap: 16px; 
	overflow-x: auto; 
	scroll-snap-type: x mandatory; 
	scroll-behavior: smooth; 
	scrollbar-width: 0; 
} 

.carousel::-webkit-scrollbar { 
	display: none; 
} 

.carousel :where(.card, .img) { 
	display: flex; 
	align-items: center; 
	justify-content: center;
    margin-top:-0.5px; 


} 

.carousel.dragging { 
	scroll-snap-type: none; 
	scroll-behavior: auto; 
} 

.carousel.no-transition { 
	scroll-behavior: auto; 
} 

.carousel.dragging .card { 
	cursor: grab; 
	user-select: none; 
    
} 

.carousel .card { 
	scroll-snap-align: start; 
	height: 200px; 
	list-style: none; 
	background:yellowgreen; 
	border-radius: 8px; 
	display: flex; 
	cursor: pointer; 
	width: 90%; 
	padding-bottom: 5px; 
	align-items: center; 
	justify-content: center; 
	flex-direction: column; 
} 

.card .img { 
	
	width: 50px; 
	height: 50px; 
	border-radius: 20%; 

} 

.card .img img { 
	width: 100px; 
	height: 90px; 
	object-fit: cover; 
	border-radius: 50%; 
	border: 4px solid #fff; 
} 

.card h2 { 
	font-weight: 300; 
	font-size: 1rem; 
	margin: 25px 0 5px; 

} 

.card span { 
	color: whitesmoke; 
	font-size: 0.5rem; 
    padding: 10px 10px 10px 20px;

} 

@media screen and (max-width: 100px) { 
	.wrapper .carousel { 
		grid-auto-columns: calc((20% / 2) - 9px); 

	} 
} 

@media screen and (max-width: 50px) { 
	.wrapper .carousel { 
		grid-auto-columns: 20%; 

	} 
}
/* FOOTER */
footer {
    background: linear-gradient(135deg, #8e44ad, #c0392b);
    color: #fff;
    padding: 40px 0;
    text-align: center;
   
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.5);
}

.footer-content {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
    padding: 20px 0;
    max-width: 1200px;
    margin: 0 auto;
    height: 400px;
}

.footer-section {
    flex: 1;
    margin: 20px;
    min-width: 250px;
}

.footer-section h2 {
    font-size: 1.5em;
    margin-bottom: 15px;
    border-bottom: 2px solid #fff;
    display: inline-block;
    padding-bottom: 5px;
}

.footer-section p,
.footer-section ul,
.footer-section a {
    font-size: 1.1em;
    line-height: 1.8;
    color: #f1c40f;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin: 10px 0;
}

.footer-section ul li a {
    color: #f1c40f;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section ul li a:hover {
    color: #fff;
    text-decoration: underline;
}

.footer-section .social {
    display: flex;
    justify-content: center;
    align-items: center;
}

.footer-section .social a {
    margin: 0 10px;
    color: #f1c40f;
    text-decoration: none;
    font-size: 1.5em;
    transition: color 0.3s ease, transform 0.3s ease;
}

.footer-section .social a:hover {
    color: #fff;
    transform: scale(1.2);
}

.footer-bottom {
    margin-top: 20px;
    font-size: 1em;
    color: #f1c40f;
    border-top: 1px solid #fff;
    padding-top: 10px;
}
/* ADD BUTTON */
#hh{
    border-radius: 4px;
  background-color: rgb(206, 135, 206);
  border: none;
  color: #fff;
  text-align: center;
  font-size: 20px;
  padding: 2px 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 20px;
 
  height: 50px;
  box-shadow: 0 10px 20px -8px rgba(0, 0, 0,.7);

}

/* SERVICE SCROLLING */
.horizontal-card-container {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    padding: 10px;
    
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}

.horizontal-card-container::-webkit-scrollbar {
    display: none;  /* Safari and Chrome */
}

.card {
    flex: 0 0 auto; /* Prevent the cards from shrinking */
    margin-right: 10px; /* Space between cards */
}
/* DASHBOARD IMAGE SCROLL */

.carousel {
    height: 100vh;
    width: 100%;
}

.carousel-inner {
    height: 100%;
}

.carousel-item {
    height: 100vh;
}

.carousel-item img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    padding: 10px;
}

.carousel-control-prev,
.carousel-control-next {
    width: 5%;
}
/*  */
label {
	display: block;
	position: absolute;
	top: 50%;
	left: 50%;
	width: 280px;
	height: 200px;
	perspective: 1000px;
	transform-style: preserve-3d;
	transform: translate(-50%, -50%);
	cursor: pointer;
   border-radius: 10px;
}

.flip-card {
	position: relative;
	width: 100%;
	height: 100%;
	transform-style: preserve-3d;
	transition: all 0.5s ease-in-out;
	z-index: 1;
    
}

.flip-card .front,
.flip-card .back {
	position: absolute;
	width: 100%;
	height: 100%;
	text-align: center;
	background:whitesmoke;
	backface-visibility: hidden;
	border-radius: 0 40px 0 40px ;
}

.flip-card .back {
	transform: rotateX(180deg);
	color: #000;
	background: black;
}

label:hover .flip-card {
	transform: rotateX(2deg);
	box-shadow: 0 20px 20px rgba(50, 60, 60, 0.2);
}

input {
	display: none;
}

:checked + .flip-card {
	transform: rotateX(180deg);
}
label:hover :checked + .flip-card {
	transform: rotateX(175deg);
	box-shadow: 0 20px 20px rgba(255, 255, 255, 0.2);
}

.front img {
	width: 110px;
	height: 110px;
	margin: 30px 0 20px 0;
	border-radius: 50%;
}

.front h1 {
	font-size: 30px;
	color: #499bef;
	margin: 0;
}
.front h2 {
	font-size: 18px;
	color: #4e699d;
	margin: 12px 0 12px 0;
}

.front b {
	font-size: 14px;
	color: #424752;
	margin: 0 0 35px 0;
	display: block;
}

.front p,
.back .click {
	font-size: 18px;
	font-weight: 600;
}

.back h1 {
	color: #424752;
	margin: 30px 0 0 0;
}

hr {
	width: 180px;
	margin: 15px auto 10px auto;
}

.back p {
	font-size: 16px;
	color: #000;
	padding: 0 18px;
	line-height: 30px;
	text-align: center;
	margin: 0 auto;
}
.video-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 500px;
    overflow: hidden;
    z-index: -1;
}

#bg-video {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 500px;
    object-fit: cover;
    transform: translate(-50%, -50%);
}
        
    </style>

</head>
<body>
<!-- navbar -->
        <header>
            <center><h1 class="heading"><img src="lo.jpeg" alt=""></h1></center>
            <nav class="navbar"> 
                <ul> 
                    <li class="item"><a href="#home">Home</a></li> 
                    <li class="item"><a href="#services-container">Services</a></li> 
                    <li class="item"><a href="#client-section">Our Clients</a></li> 
                    <li class="item"><a href="#review-container">Reviews</a></li> 
                    <li class="item"><a href="#contact">Contact Us</a></li> 
                </ul>
            </nav>
        </header>
<!-- images scrolling -->
    
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    
                    </div>
                    <div class="carousel-item">
                        <img src="bg2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="bg1.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                const carouselElement = document.getElementById('carouselExampleControls');
                const carousel = new bootstrap.Carousel(carouselElement, {
                    interval: 2000, // Time in milliseconds (3 seconds)
                    ride: 'carousel'
                });
            });
                </script>
           
<!-- GALLARY HOME -->

                <section id="home">
                <center><h1 class="h-primary"><i class="fa-sharp fa-regular fa-sparkles fa-xs fa-beat" style="color:black; font-family:'Archivo Black, sans-serif'; font-size: 30px; margin-top:100px;"><b>Home</b></i></h1></center>

                <div class="container" style="margin-top:-40px">
            <div class="row row-cols-3" style="padding: 100px 100px 100px 100px;">
                <div class="col">
                    <img src="bg1.webp" alt="" height="100px" width="250px">
                </div>
                <div class="col">        <img src="bg1.webp" alt="" height="100px" width="250px">
                </div>
                <div class="col">        <img src="bg1.webp" alt="" height="100px" width="250px">
                </div>
                <div class="col">        <img src="bg1.webp" alt="" height="100px" width="250px">
                </div>
                <div class="col">        <img src="bg1.webp" alt="" height="100px" width="250px">
                </div>
                <div class="col">        <img src="bg1.webp" alt="" height="100px" width="250px">
                </div>
            </div>
            </div>
                </section> 
<!-- SERVICE SECTION -->
                <section id="services-container">
                    <center><h1 class="h-primary"><i class="fa-sharp fa-regular fa-sparkles fa-xs fa-beat" style="color:white; font-family:'Archivo Black, sans-serif'; font-size: 30px;"><b>Our Services</b></i></h1></center>
                    
                    
                    <?php
            include("connect.php");

            $view = mysqli_query($conn, "SELECT * FROM service WHERE status = 1"); // Only fetch enabled services
            ?>
            <div class="horizontal-card-container" >
                <?php
                while ($data = mysqli_fetch_assoc($view)) {
                    $name = htmlspecialchars($data['offer_name']);
                    $content1 = htmlspecialchars($data['content1']);
                    $content2 = htmlspecialchars($data['content2']);
                    $content3 = htmlspecialchars($data['content3']);
                    $content4 = htmlspecialchars($data['content4']);
                    ?>
                    
		
                    <div class="card text-dark bg-info mb-3" style="max-width: 18rem; background-color:deeppink;" >
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">
                        <label>
			<input type="checkbox" />
			<div class="flip-card">
				<div class="front" >
               
                <div class="fa-3x">
               
                <h5 class="card-title" style="margin-top:80px;"><?php echo $name; ?></h5>
                <i class="fa-solid fa-shake" style="color: deeppink; font-size:20px; font-family:cursive;">click here</i> </div>
					
				</div>
				<div class="back" >
                <p class="card-text" style="margin-top:15px; margin-bottom:15px; color:chartreuse; font-size:larger;"><?php echo $content1; ?><br></p>
                            <p class="card-text" style="margin-bottom:15px; color:#499bef; font-size:larger;"><?php echo $content2; ?><br></p>
                            <p class="card-text" style="margin-bottom:15px; color:#f1c40f; font-size:larger;"><?php echo $content3; ?><br></p>
                            <p class="card-text" style="margin-bottom:15px; color:deeppink; font-size:larger;"><?php echo $content4; ?><br></p>
                            
					<p class="click">click here</p>
				</div>
			</div>
		</label>
                            
                        </div>
                    </div>
                <?php } ?>
            </div>
                </section>
<!-- CLIENT SECTION -->
                <section id="client-section">
                <center> <h1 class="h-primary"><i class="fa-sharp fa-regular fa-sparkles fa-xs fa-beat" style="color: black; font-family:'Archivo Black, sans-serif'; font-size: 30px;"><b>We Used By Product</i></i></h1></center> 
                    <div class="marquee-container">
                        <div class="marquee">
                            <img src="c2.png" alt="Client 1"> <br>
                            <img src="client6.png" alt="Client 6"> <br>
                            <img src="client5.jpg" alt="Client 5"> <br>
                            <img src="c3.webp" alt="Client 2"> <br>
                            <img src="c4.webp" alt="Client 3"> <br>
                        </div>
            </div>
            </section>
<!-- REVIEW SECTION -->
                    <section id="review-container" >
                        <center>
                        <h1 class="h-primary"><i class="fa-sharp fa-regular fa-sparkles fa-xs fa-beat" style="color: black; font-family: 'Archivo Black', sans-serif; font-size: 30px;"><b>Reviews</b></i></h1>
                        </center>
                        <div class="wrapper" style="margin-left: 60px; margin-top:100px;"> 
                        
                            <ul class="carousel"> 
                                <li class="card" > 
                                    <div class="img" ><img src= 
                    "bg2.jpg"
                                                        alt="" draggable="false"> </div> 
                                    <h2 style="color: green; font-weight:bold;"> 
                                        Hrushali patil
                                    </h2> 
                                    <span>  <div class="star-rating">
                                        <input type="radio" id="5-stars" name="rating" value="5" />
                                        <label for="5-stars" class="star">&#9733;</label>
                                        <input type="radio" id="4-stars" name="rating" value="4" />
                                        <label for="4-stars" class="star">&#9733;</label>
                                        <input type="radio" id="3-stars" name="rating" value="3" />
                                        <label for="3-stars" class="star">&#9733;</label>
                                        <input type="radio" id="2-stars" name="rating" value="2" />
                                        <label for="2-stars" class="star">&#9733;</label>
                                        <input type="radio" id="1-star" name="rating" value="1" />
                                        <label for="1-star" class="star">&#9733;</label>
                                    </div></span> 
                                </li> 
                                
                                <?php include('rdisplay.php'); ?> 
                                <form action="insert.php" >
                                   <div>
                                    <button id="hh"  style="margin-bottom:-70px;"
                                
                                    onclick="window.location.href = 'https://localhost/insert.php;'"> Add
                                    </button>
                                    
                                </div></form>
                            
                                </div>
                                
                            </ul> 
                           
                               
                                
                    </section>
                       
                                
                    <script>
                        document.addEventListener("DOMContentLoaded", function() { 
                        const carousel = document.querySelector(".carousel"); 
                        const arrowBtns = document.querySelectorAll(".wrapper i"); 
                        const wrapper = document.querySelector(".wrapper"); 
                    
                        const firstCard = carousel.querySelector(".card"); 
                        const firstCardWidth = firstCard.offsetWidth; 
                    
                        let isDragging = false, 
                            startX, 
                            startScrollLeft, 
                            timeoutId; 
                    
                        const dragStart = (e) => { 
                            isDragging = true; 
                            carousel.classList.add("dragging"); 
                            startX = e.pageX; 
                            startScrollLeft = carousel.scrollLeft; 
                        }; 
                    
                        const dragging = (e) => { 
                            if (!isDragging) return; 
                        
                            // Calculate the new scroll position 
                            const newScrollLeft = startScrollLeft - (e.pageX - startX); 
                        
                            // Check if the new scroll position exceeds 
                            // the carousel boundaries 
                            if (newScrollLeft <= 0 || newScrollLeft >= 
                                carousel.scrollWidth - carousel.offsetWidth) { 
                                
                                // If so, prevent further dragging 
                                isDragging = false; 
                                return; 
                            } 
                        
                            // Otherwise, update the scroll position of the carousel 
                            carousel.scrollLeft = newScrollLeft; 
                        }; 
                    
                        const dragStop = () => { 
                            isDragging = false; 
                            carousel.classList.remove("dragging"); 
                        }; 
                    
                        const autoPlay = () => { 
                        
                            // Return if window is smaller than 800 
                            if (window.innerWidth < 800) return; 
                            
                            // Calculate the total width of all cards 
                            const totalCardWidth = carousel.scrollWidth; 
                            
                            // Calculate the maximum scroll position 
                            const maxScrollLeft = totalCardWidth - carousel.offsetWidth; 
                            
                            // If the carousel is at the end, stop autoplay 
                            if (carousel.scrollLeft >= maxScrollLeft) return; 
                            
                            // Autoplay the carousel after every 2500ms 
                            timeoutId = setTimeout(() => 
                                carousel.scrollLeft += firstCardWidth, 2500); 
                        }; 
                    
                        carousel.addEventListener("mousedown", dragStart); 
                        carousel.addEventListener("mousemove", dragging); 
                        document.addEventListener("mouseup", dragStop); 
                        wrapper.addEventListener("mouseenter", () => 
                            clearTimeout(timeoutId)); 
                        wrapper.addEventListener("mouseleave", autoPlay); 
                    
                        // Add event listeners for the arrow buttons to 
                        // scroll the carousel left and right 
                        arrowBtns.forEach(btn => { 
                            btn.addEventListener("click", () => { 
                                carousel.scrollLeft += btn.id === "left" ? 
                                    -firstCardWidth : firstCardWidth; 
                            }); 
                        }); 
                    });
                    </script>
                    
                    
                    </section>
                    <section id="contact" style="padding: 60px;">
                   
                        <center>
                        <h1 class="h-primary"><i class="fa-sharp fa-regular fa-sparkles fa-xs fa-beat" style="color:black; font-family: 'Archivo Black', sans-serif; font-size: 30px;"><b> Take Appointment</b></i></h1>
                        </center>
                    
                        
            <form action="contact.php">
            <div style="margin-bottom: 100px;">
            <button
        style="margin-left: 380px;"
                onclick="window.location.href = 'https://localhost/contact.php;'"> Appointment
            </button>
            
            </div>
            </form>
            <form action="skin.php">
            <div  id="skin" >

            <button
        style="margin-left: 380px;"
                onclick="window.location.href = 'https://localhost/contact.php;'"> skin
            </button>
            </div>
            </form>
          
           
            <form action="hair.php">
            <div  id="hair" >
            <button
        style="margin-left: 380px;"
                onclick="window.location.href = 'https://localhost/contact.php;'"> hair
            </button>
            </div>
            </form>
            <form action="nail.php">
            <div  id="nail" >
            <button
        style="margin-left: 380px;"
                onclick="window.location.href = 'https://localhost/contact.php;'"> nails
            </button>
            </div>
            </form>
                        </section>
               <!-- FOOTER -->
                <footer style="font-size:smaller;">
                    <div class="footer-content">
                        <div class="footer-section about">
                            <h2>About Us</h2>
                            <p>At our salon, we offer a range of services to help you look and feel your best. Our experienced team is here to provide you with a relaxing and rejuvenating experience.</p>
                        </div>
                        <div class="footer-section links">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#client-section">About</a></li>
                                <li><a href="#services-container">Services</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer-section contact">
                            <h2>Contact Us</h2>
                            <p>Email: info@salon.com</p>
                            <p>Phone: (123) 456-7890</p>
                        </div>
                        <div class="footer-section social">
                            <h2>Follow Us</h2><br>
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        &copy; 2024 Salon Name | Designed by Hrushali Patil
                    </div>
                </footer>
            </body>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            </html>
</body>
</html>
