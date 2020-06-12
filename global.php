<!-- <?php 
 $data=file_get_contents('https://api.covid19api.com/summary');
 $corona=json_decode($data);

echo "<pre>";
 print_r($corona);

 ?> -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title>corona</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <style type="text/css">
 	table{
 		width: 100%;
 		border:3px solid black;
        margin-top: 350px;
 	}
h1 span{
    display: inline-block;
    animation: animate 3s linear forwards;
    font-size: 50px;
       
}
@keyframes animate{
    0%{
        opacity: 0;
        transform: rotate(360deg);
        filter: blur(20px);
    }
    100%{
        opacity: 1;
        transform: rotate(0deg);
        filter: blur(0);
    }
    h1 span:nth child(1){
        animation-delay: 1s;
    }
    h1 span:nth child(2){
        animation-delay: 1s;
    }
    h1 span:nth child(3){
        animation-delay: 1s;
    }
    h1 span:nth child(4){
        animation-delay: 1s;
    }
    h1 span:nth child(6){
        animation-delay: 1s;
    }
    h1 span:nth child(7){
        animation-delay: 1s;
    }
    h1 span:nth child(8){
        animation-delay: 1s;
    }
}

marquee{
    font-size: 40px;
    margin-left: 10%;
    width: 80%;
    background-color: transparent;
    color: black;
    position: relative;
}
img{
    position: absolute;
    width: 100%;
    height: 400px;
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
    width: 30%;
    height: 20%;
    margin-top: 200px;
    animation: virus 1s infinite;
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
 </style>
 <body onload="fetch()">
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
        <a class="nav-link" href="index.php" style="color: white;">Covid-India</a>
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

<img src="covid-19.jpg" style="opacity: 0.3">
<img src="2913584.svg" class="virus">
<br><br><br>
 		<div id="global1" onload="global1()"></div>
 	
 <div class="table-responsive">
 	<table id="tval" class="table-striped table-dark table-bordered table-hover ">
 		<tr>
 		<th>Country</th>
 		<th>Total Confirmed</th>
 		<th>New Confirmed</th>
        <th>New Deaths</th>
 		<th>Total Deaths</th>
 		<th>New Recovered</th>
 		<th>Total Recovered</th>
 		<th>Date</th>
 	</tr>
 	</table>
 </div><!-- Footer -->
<footer>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color:white; color: black;">© 2020 Copyright:
    <a href="#">covid-19</a><br>
    Design & Developed By virat vamja
    
  </div>
  <!-- Copyright -->

</footer>
 </body>
 <script type="text/javascript">
 	function fetch() {
 		 $.get("https://api.covid19api.com/summary",
             function(data){
             	console.log(data['Countries'].length);
             	var tval=document.getElementById('tval');
             	for (var i = 1; i <(data['Countries'].length); i++) {
             		 var x=tval.insertRow();
             		 x.insertCell(0);

             		 tval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
             		 tval.rows[i].cells[0].style.background='#';
             		 tval.rows[i].cells[0].style.fontSize ="20px";
                      
                       x.insertCell(1);

                     tval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                     tval.rows[i].cells[1].style.background='';
                     tval.rows[i].cells[1].style.color='red';
             		 x.insertCell(2);

             		 tval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['NewConfirmed'];
             		 tval.rows[i].cells[2].style.background='';
             		 tval.rows[i].cells[2].style.color='red';

             		   x.insertCell(3);

                     tval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['NewDeaths'];
                     tval.rows[i].cells[3].style.background='';
                     tval.rows[i].cells[3].style.color='red';


             		  x.insertCell(4);

             		 tval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['TotalDeaths'];
             		 tval.rows[i].cells[4].style.background='';
             		 tval.rows[i].cells[4].style.color='red';

             		   x.insertCell(5);

             		 tval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
             		 tval.rows[i].cells[5].style.background='';
             		 tval.rows[i].cells[5].style.color='red';

             		 	   x.insertCell(6);

             		 tval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['TotalRecovered'];
             		 tval.rows[i].cells[6].style.background='';
             		 tval.rows[i].cells[6].style.color='red';

             		 x.insertCell(7);

             		 tval.rows[i].cells[7].innerHTML=data['Countries'][i-1]['Date'];
             		 tval.rows[i].cells[7].style.background='';
             		 tval.rows[i].cells[7].style.color='red';
             	}
             }
 		 	)
}
function global1(){
	$.get("https://api.covid19api.com/summary",
		function(data){
        var gbl=document.getElementById('global1');
        console.log(data['Global']['NewConfirmed']);
        for (var i = 0; i < data.length; i++) {
             gbl.innerHTML=data['Global']['NewConfirmed'][0];
        }
    
}
		)
}
 </script>
 </html>