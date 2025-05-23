<?php
    require 'assets/partials/_functions.php';
    $conn = db_connect();    

    if(!$conn) 
        die("Connection Failed");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityBus</title>
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="./js/homepage.js"></script>
	<title>CityBus Bookings</title>
</head>
<body>
    <!-- includeing header using php -->
    <?php include "./header.php" ?>
            <!-- Image slider code -->
    <div class="slideshow-container">
        <!-- Slide counter -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="images/slide-3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="images/slide-2.png" style="width:100%; height:100%;">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="images/slide-1.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="images/slide-4.jpg" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a id="prev" onclick="plusSlides(-1)" class="prev">&#10094;</a>
        <a id="next" onclick="plusSlides(1)" class="next">&#10095;</a>

        <!-- The dots/circles -->
        <div class="beacons" style="text-align:center">
            <span id="d-one" class="dot" onclick="currentSlide(1)"></span>
            <span id="d-two" class="dot" onclick="currentSlide(2)"></span>
            <span id="d-three" class="dot" onclick="currentSlide(3)"></span>
            <span id="d-four" class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>

    <div class="package-sector">
        <div class="pack-intro" style="font-weight: 300;">
            <p>Recommended Bus Tours Package in Sri Lanka, suited for anyone <br>who would like travel saftetly in
                Sri Lanka</p>
        </div>
        <div class="package-grid">
            <div class="pack" id="p1">
                <div class="pic-polygon">
                </div>
                <div class="price">$60</div>
                <div class="trip-det">
                    <p class="l1">Colombo to Dambulla </p>
                </div>
            </div>

            <div class="pack" id="p2">
                <div class="pic-polygon">
                </div>
                <div class="price">$50</div>
                <div class="trip-det">
                    <p class="l1">Kaluthara to Unawatuna</p>
                </div>
            </div>

            <div class="pack" id="p3">
                <div class="pic-polygon">
                </div>
                <div class="price">$30</div>
                <div class="trip-det">
                    <p class="l1">Kurunegala to Anuradhapura</p>
                </div>
            </div>

            <div class="pack" id="p4">
                <div class="pic-polygon">
                </div>
                <div class="price">$40</div>
                <div class="trip-det">
                    <p class="l1">Gampaha to Kandy</p>
                </div>
            </div>

            <div class="pack" id="p5">
                <div class="pic-polygon">
                </div>
                <div class="price">$70</div>
                <div class="trip-det">
                    <p class="l1">Mathale to Jaffna</p>
                </div>
            </div>

            <div class="pack" id="p6">
                <div class="pic-polygon">
                </div>
                <div class="price">$100</div>
                <div class="trip-det">
                    <p class="l1">Chilaw to Trincomalee</p>
                </div>
            </div>
        </div>
        <div class="container">
            <button class="btn-red"> <a href="assets/partials/_loginModal.php">Login As Admin</a></button>
        </div>
        <style>
            .btn-red {
                background-color: red;
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                margin-top: 50px;
                margin-bottom: 50px;
            }

            .btn-red a {
                text-decoration: none;
                color: white;
                font-size: 19px;
            }

            .btn-red:hover {
                background-color: darkred;
            }
        </style>

    <!-- External JS -->
    <script src="assets/scripts/main.js"></script>
    
    <footer width="1920px" class="footer" id="footer">

		<div class="footer-container">
			<div class="row">
			<div class="footer-col">
					
						<h4>CityBus.lk</h4>
						 <p style="color: white;"><img width="35" height="35" src="https://img.icons8.com/glyph-neue/64/FFFFFF/bus--v1.png"/> City Bus.lk </p>
	 <p style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> No.123,ABC building,Colombo10</p>
	 <p style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M17 1H7c-1.1 0-1.99.9-1.99 2L5 21c0 1.1.89 2 1.99 2H17c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm-5 18c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.5-5h-7c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h7c.28 0 .5.22.5.5s-.22.5-.5.5zm0-3h-7c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h7c.28 0 .5.22.5.5s-.22.5-.5.5zm0-3h-7c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h7c.28 0 .5.22.5.5s-.22.5-.5.5z"/></svg> 0112342341 </p>
					</ul>
					</div>
				<div class="footer-col">
					<h4>Company</h4>
					<ul>
						<li><a href="about.php">About us</a></li>
						<li><a href="contactus.php">Contact us</a></li>
						<li><a href="terms.php">Terms and Conditions</a></li>
						<li><a href="privacypolicy.php">Privacy Policy</a></li>
						<li><a href="faq.php">FAQ</a></li>
					</ul>
				</div>
				
				
				
				<div class="footer-col">
					<h4>Follow us</h4>
					<div class="social-media">
						<a href=""><i class="fa-brands fa-instagram"></i></a>
						<a href=""><i class="fa-brands fa-facebook-f"></i></a>
						<a href=""><i class="fa-brands fa-whatsapp"></i></a>
						<a href=""><i class="fa-brands fa-twitter"></i></a>

					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="copyright">
			<p>Copyright &copy2024. All rights reserved</p>
		</div>
	</footer>
</body>
    
<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

showSlides();
autoshowSlides();

function autoshowSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(autoshowSlides, 5000); // Change image every 5 seconds
}
</script>
</html>
