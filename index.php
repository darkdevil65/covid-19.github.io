<!DOCTYPE html>
<html>
<head>
	<title>India Update</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style type="text/css">
    table{
        animation: tbl 3s;
    }
    @keyframes tbl{
        from{
            transform: translateY(-30px);
            opacity: 0;
        }
        to{
            transform: translateY(0px);
            opacity: 1;
        }
    }
	marquee{
		width: 100%;
		font-size: 40px;
		color: red;

	}
	.navbar{
    color: white;
    font-size: 30px;
}

.navbar ul li a:hover{
    transform: scale(1.5);
}
#covid{
    animation: covid 2s infinite;
}
.virus{
    position: absolute;
    width: 20%;
    height: 10%;
    animation: virus 1s infinite;
    align-items: left;

}
.covidimg{
    position: relative;
    width: 100%;
    height: 500px;
    opacity: 0.7;
    animation: img 3s;

}
@keyframes img{
        from{
            transform: translateY(80px);
            opacity: 0;
        }
        to{
            transform: translateY(0px);
            opacity: 1;
        }
    }
@keyframes covid{
    0%{
        transform: scale(1);
    }
    100%{
        transform: scale(1.3);
    }
}
@keyframes virus{
    0%{
        transform:scale(1);
        opacity: 1;
    }
    100%{
        transform: scale(1.5);
        opacity: 0.2;
    }

}
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
.card1{
  font-family: 'Poppins', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}
.card1:after{
  position: absolute;
  content: "";
  width: 100%;
  height: 50%;
}
.card1:before{
  position: absolute;
  content: "";
  bottom: 0;
}
.container {
  z-index: 1;
  width: 100%;
  margin: 0 auto;
    border-radius: 24px;
    background: #F6F5F0;
    padding: 2%;
    box-shadow: 0px 10px 6px -8px rgba(0,0,0,0.75);
}
.board {
    column-count: 3;
    column-gap: 1rem;
}
.container h2 {
    margin: 0 0 30px;
    text-align: center;
}
img#flag {
    height: 20px;
    width: 20px;
}
.card {
    width: 80%;
    background: #ccc;
    padding: 8%;
    margin-bottom: 20px;
    border-radius: 6px;
    color: #fff;
}
.card.a {
    background: #41a7ff;
}
.card.cr {
    background: #ff3434;
}
.card.r {
    background: #32b336;
}
.card.ca {
    background: #d83f3f;
}
.card.d {
    background: #ff0053;
}
.card.t {
    background: #ffa501;
}
.card h5 {
    margin: 0;
    font-size: 1rem;
}
.card span {
    font-size: 3rem;
    font-weight: 700;
    letter-spacing: 4px;
}
.card i {
    font-size: 3rem;
}
@media screen and (max-width: 768px){
  .board {
    column-count: 2;
  }
  .card span {
    font-size: 2.5rem;
  }
}
#a:hover{
  transform: scale(1.2);

}
#b:hover{
  transform: scale(1.2);

}
#c:hover{
  transform: scale(1.2);

}
#d:hover{
  transform: scale(1.2);

}
#e:hover{
  transform: scale(1.2);

}
#f:hover{
  transform: scale(1.2);

}
@media screen and (max-width: 500px){
  .board {
    column-count: 1;
  }
}
#head{
  animation: head 3s infinite;
}
@keyframes head{
  0%{
    transform: scale(1);
  }
  100%{
    transform: scale(1.3);
  }
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.activ {
  background-color: red;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<body style="background-color:  #101010">
	  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#" style="font-size: 30px;color: red;" id="covid">Corona Update</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
    <span class="navbar-toggler-icon"></span>&nbsp;&nbsp;&nbsp;
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: white;">home<span class="sr-only">(current)</span></a>
      </li>&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="global.php" style="color: white;">Covid-Global</a>
      </li>&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="https://www.who.int/health-topics/coronavirus" style="color: white;">WHO</a>
      </li>&nbsp;&nbsp;&nbsp;
       <li class="nav-item">
        <a class="nav-link" href="maps.html" style="color: white;">Map</a>
      </li>
    </ul>
  </div>
</nav>
	<h1 style="text-align: center; font-size: 60px; color: red;" class="bg-dark">India State Wise Corona Cases Updates</h1><br>
  <div class="card1">
    <div class="container">
      <h2 id="head">COVID -19 Cases in <span id="country"></span> <img src="" id="flag"></h2>
      <div class="board">
        <div class="card a" id="a"><i class="fa fa-tachometer"></i><h4>Active Cases</h4><span id="active"></span></div>
        <div class="card ca" id="b"><i class="fa fa-th-list"></i><h4>Total Cases</h4><span id="cases"></span></div>
        <div class="card cr" id="c"><i class="fa fa-times-circle"></i><h4>Critical Cases</h4><span id="critical"></span></div>
        <div class="card d" id="d"><i class="fa fa-times"></i><h4>Total Deaths</h4><span id="death"></span></div>
        <div class="card r" id="e"><i class="fa fa-check-square-o"></i><h4>Recovered Cases</h4><span id="recovered"></span></div>
        <div class="card t" id="f"><i class="fa fa-eye"></i><h4>Total Testes Done</h4><span id="tests"></span></div>
      </div>
    </div></div>
  </body>
  <script type="text/javascript">

fetch('https://corona.lmao.ninja/v2/countries/India')
.then((response) => {
  return response.json();
})
.then((data) => {
  console.log(data);
  document.getElementById("country").innerHTML = data.country;
  document.getElementById("active").innerHTML = data.active.toLocaleString();
  document.getElementById("cases").innerHTML = data.cases.toLocaleString();
  document.getElementById("critical").innerHTML = data.critical.toLocaleString();
  document.getElementById("death").innerHTML = data.deaths.toLocaleString();
  document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
  document.getElementById("tests").innerHTML = data.tests.toLocaleString();
  document.getElementById("flag").src = data.countryInfo.flag;
});
</script>
  
<h2 align="center" style="font-size: 50px;">Be Safe</h2>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="c2.jpeg" style="width:100%">
  <div class="text">COVID-19</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="COVID.jpg" style="width:100%">
  <div class="text">STAY SAFE</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="covid-19.jpg" style="width:100%">
  <div class="text">WASH YOUR HANDS </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activ", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " activ";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
	<img src="2913584.svg" class="virus">
	<marquee behavior="alternate">Live India Cases</marquee>
  
<table class="table-striped table-dark table-bordered table-hover" style="width: 100%; margin-top: 3%;">
	<tr>
		<th style="text-align: center; font-size: 20px;">Date</th>
		<th style="text-align: center; font-size: 20px;">State</th>
		<th style="text-align: center; font-size: 20px;">Comfirmed</th>
		<th style="text-align: center; font-size: 20px;"> Active</th>
		<th style="text-align: center; font-size: 20px;">Recovered</th>
		<th style="text-align: center; font-size: 20px;">Deaths</th>
	</tr>
	<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);
$i=1;
while($i < $statescount){
?>
<tr>
	<td class="text-capitalize"><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ; ?> </td>
	<td class="text-capitalize" style="font-size: 20px; text-align: center;"><?php echo $coranalive['statewise'][$i]['state'] . "<br>"  ; ?> </td>
	<td class="text-capitalize" style="color: red;font-size: 15px; text-align: center;"><?php echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ; ?> </td>
	<td class="text-capitalize"><?php echo $coranalive['statewise'][$i]['active'] . "<br>"  ; ?> </td>
	<td class="text-capitalize"><?php echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ; ?> </td>
	<td class="text-capitalize"> <?php echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ; ?> </td>
</tr>
<?php
  $i++;
}
?>
</table>
<footer>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color:white; color: black;">© 2020 Copyright:
    <a href="#">covid-19</a><br>
    Design & Developed By virat vamja
    
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>