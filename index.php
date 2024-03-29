<?php
session_start();
require_once "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="viewport" content="initial-scale=1 , maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript">
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
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
	</script>
	<style type="text/css">
		 {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  visibility: visible; 
  animation-name: fadeInUp; 
  -webkit-animation-name: fadeInUp;
}

/* Hide the images by default */
.mySlides {
  display: ;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
   transition: background-color 1s ease;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.1s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 0.1s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
	</style>
</head>
<body>
	<header><?php require("header.php");?></header>
	<div class="conainer-main row">
		<section>
			<aside class="col-25">
				<?php include "left.php"; ?>
			</aside>
			<main class="main col-65">

<?php //require("slide.php");?>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
<style type="text/css">
.slider{
  width: 850px;
  height: 550px;
  border-radius: 10px;
  overflow: hidden;
}
.slides{
  width: 500px;
  height: 400px;
  display: flex;
}
.slides input{
  display: none;
}
.slide{
width: 850px;
transition: 1s;
}
.slide img{
  width: 850px;
  height: 500px;
}
.navigation-manual{
position: absolute;
width: 850px;
margin-top: -40px;
display: flex;
justify-content: center;
}
.manual-btn{
  border: 2px solid #40D3Dc;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}
.manual-btn:not(:last-child){
  margin-right: 40px;
}
.manual-btn:hover{
  background:#40D3Dc;
}
#radio1:checked ~ .first{
  margin-left: 0;
}
#radio2:checked ~ .first{
  margin-left: -170%;
}
#radio3:checked ~ .first{
  margin-left: -340%;
}
#radio4:checked ~ .first{
  margin-left: -510%;
}
.navigation-auto{
  position: absolute;
  display: flex;
  width: 850px;
  justify-content: center;
  margin-top: 360px;
}
.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}
.navigation-auto div:not(:last-child){
  margin-right: 40px;
  justify-content: center;
}
#radio1:checked ~ .navigation-auto .auto-btn1{
  background:#40D3DC;
}
#radio2:checked ~ .navigation-auto .auto-btn2{
  background:#40D3DC;
}
#radio3:checked ~ .navigation-auto .auto-btn3{
  background:#40D3DC;
}
#radio4:checked ~ .navigation-auto .auto-btn4{
  background:#40D3DC;
}

</style>
  <div class="main-msg">
          <h2>Distance and Continuing E-learning Education System </h2>

        </div>
<div class="slider">
  <div class="slides">
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">
    <input type="radio" name="radio-btn" id="radio5">
    <div class="slide first">
      <img src="w.jpg" alt="">
    </div>
    <div class="slide">
      <img src="di.jpg" alt="">
    </div>
    <div class="slide">
      <img src="b4.jpg" alt="">
    </div>
      <div class="slide">
      <img src="diss.jpg" alt="">
    </div>
      <div class="slide">
      <img src="c.jpg" alt="">
    </div>
    <div class="navigation-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
      <div class="auto-btn4"></div>
      <div class="auto-btn5"></div>
    </div>
  </div>
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
  </div>
</div>
<script type="text/javascript">
  var counter=1;
  setInterval(function(){
    document.getElementById('radio'+counter).checked=true;
    counter++;
    if (counter>4) {
      counter=1;
    }
  },5000);
</script>
				
<!--<img class="moto" alt="aside one" src="images/c.JPG" width="800px" height="400px"/>-->
			
</main>			
<aside class="col-25">				
<?php include "leftlogin.php";?>				
<div class="social-link">						
<h3>Social Links</h3>						
<ul>							
<li>								
<a href="https://m.facebook.com/pg/JimmaUniv" target="blank"><img class="logo" src="images/logo/logo_facebook.png" /></a>							
</li>							
<li>								
<a href="https://t.me/JimmaUniversityOfficial" target="blank"><img class="logo" src="images/logo/logo_telegram.svg" /></a>							
</li>							
<li>								
<a href="https://mail.google.com" target="blank"><img class="logo" src="images/logo/logo_gmail.svg" /></a>							
</li>							
<li>								
<a href="https://linkedin.com" target="blank"><img class="logo" src="images/logo/logo_linkedin.png" /></a>							
</li>						
</ul>					
</div>			
</aside>		
</section>
</div>

<?php require("footer.php"); ?>
</body>
</html>