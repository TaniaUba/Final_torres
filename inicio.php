<html>
<head>
	<title>Torres</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<style type="text/css">
	body {
		background-color: #000;
	}
	.w3-container {
		position: absolute;
		padding-top: 50px;
	}
	nav {
        margin-top: 10px;
        padding: 24px;
        text-align: center;
        font-family: helvetica;
        display: inline-block;
    }
    .link-3 {
       transition: 0.4s;
       color: #ffffff;
       font-size: 20px;
       text-decoration: none;
       padding: 0 10px;
       margin: 0 10px;
    }
    .link-3:hover {
       background-color: #363636;
       color: #fff;
       padding: 24px 10px;
    }
  
	</style>
</head>
<body>
<div class="example-classname">
<CENTER>
<nav id="nav-3">
  <a class="link-3" href="inicio.php">Home</a>
  <a class="link-3" href="historia.html">Historia</a>
  <img src="img/logoBlanco.png" style="width:130px;">
  <a class="link-3" href="table.php">Vinos</a>
  <a class="link-3" href="mapa.html">Viñedos</a>
</nav>
</CENTER>

	<div class="w3-container w3-center w3-animate-opacity">
    <img class="mySlides" src="img/fondo.jpg" style="width:100%">
  <img class="mySlides" src="img/vi.jpg" style="width:100%">
  <img class="mySlides" src="img/Bodegas-Torres.jpg" style="width:100%">
  <img class="mySlides" src="img/torres.jpg" style="width:100%">


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000); 
}
</script>
    </div>
<footer> 
  <a class="3" href="http://shop.clubtorres.com/es/">Club Torres</a> 
</footer>
</div>

</body>
</html>