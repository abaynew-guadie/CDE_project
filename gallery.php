<?php
session_start();
require_once "connection.php";
?>
<html>	
<head>		
<title>Home page</title>		
<meta charset="utf-8">		
<meta name="viewport" content="width=device-width, initial-scale=1">		
<meta name="viewport" content="initial-scale=1, maximum-scale=1">		
<link rel="stylesheet" type="text/css" href="css/style.css">		
<style type="text/css">		
/* The grid: Four equal columns that floats next to each other */
		.column {
		  float: left;
		  width: 25%;
		  padding: 10px;
		}

		/* Style the images inside the grid */
		.column img {
		  opacity: 0.8; 
		  cursor: pointer; 
		}

		.column img:hover {
		  opacity: 1;
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* The expanding image container */
		.container {
		  position: relative;
		  display: none;
		}

		/* Expanding image text */
		#imgtext {
		  position: absolute;
		  bottom: 15px;
		  left: 15px;
		  color: white;
		  font-size: 20px;
		}

		/* Closable button inside the expanded image */
		.closebtn {
		  position: absolute;
		  top: 10px;
		  right: 15px;
		  color: white;
		  font-size: 35px;
		  cursor: pointer;
		}
		</style>
	</head>
	
<body>
		
<header>
<?php require("header.php"); ?></header>		
<div class="container-main row">			
<section>				
<aside class="col-25">					
<?php include "left.php"; ?>				
</aside>				
<main class="main col-65">					
<div style="text-align:center; color: #fff">					  
<h2>Image Gallery</h2>					 
 <p>Click on the images below:</p>					
</div>					
<!-- The four columns -->					
<div class="row" style="animation">					
  <div class="column">					
    <img src="images/imm12.jpg" alt="Nature" style="width:90%" onclick="myFunction(this);">					 
 </div>					 
 <div class="column">					  
 <img src="images/imm13.JPG" alt="Snow" style="width:100%" onclick="myFunction(this);">					  
</div>					  
<div class="column">					    
<img src="images/imm12.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">					 
 </div>					 
 <div class="column">					   
 <img src="images/imm3.JPG" alt="Lights" style="width:100%" onclick="myFunction(this);">					  
</div>					
</div>					
</div>					
<div class="container">					  
<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>					  
<img id="expandedImg" style="width:100%">					 
 <div id="imgtext"></div>					
</div>					
<script>					
function myFunction(imgs) {					
  var expandImg = document.getElementById("expandedImg");					 
 var imgText = document.getElementById("imgtext");					 
 expandImg.src = imgs.src;					 
 imgText.innerHTML = imgs.alt;					
  expandImg.parentElement.style.display = "block";					
}					
</script>				
</main>				
</section>		
</div>		
<?php require("footer.php"); ?>	
</body>
</html>
