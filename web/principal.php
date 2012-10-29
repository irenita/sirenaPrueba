<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/scrolltop.css">
<link rel="stylesheet" type="text/css" href="css/various.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<head>
	<title>Ejemplo de desplazamiento suave sin usar el plugin scrollTo - www.lewebmonster.com</title>

	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/scrolltop.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container" id="initCont">
	<!--  Carousel - consult the Twitter Bootstrap docs at
	http://twitter.github.com/bootstrap/javascript.html#carousel -->
	<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
		<div class="carousel-inner">
			<div class="item active"><!-- class of active since it's the first item -->
				<img src="images/colored.png" alt="" />
				<div class="carousel-caption">
					<p>Caption text here</p>
				</div>
			</div>
			<div class="item">
				<img src="images/coloredCandy.png" alt="" />
				<div class="carousel-caption">
					<p>Caption text here</p>
				</div>
			</div>
			<div class="item">
				<img src="http://placehold.it/1200x480" alt="" />
				<div class="carousel-caption">
					<p>Caption text here</p>
				</div>
			</div>
			<div class="item">
				<img src="http://placehold.it/1200x480" alt="" />
				<div class="carousel-caption">
					<p>Caption text here</p>
				</div>
			</div>
			<div class="item">
				<img src="http://placehold.it/1200x480" alt="" />
				<div class="carousel-caption">
					<p>Caption text here</p>
				</div>
			</div>
			<div class="item">
				<img src="http://placehold.it/1200x480" alt="" />
				<div class="carousel-caption">
					<p>Caption text here</p>
				</div>
			</div>
		</div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
  href values must reference the id for this carousel -->
  <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->

</div>



<div id="divContenedor">
	<div id="divInfo">
		<h1>Desplazamiento suave jQuery sin Plugins</h1>
		<p>Ejemplo por Cali Rojas - <a href="http://www.lewebmonster.com">www.lewebmonster.com</a></p>
	</div>
	<div>
		<h2 id="uno">Ancla n&uacute;mero 1</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
		</p>
		<h2 id="dos">Ancla n&uacute;mero 2</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
		</p>
		<h2 id="tres">Ancla n&uacute;mero 3</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
		</p>
		<h2 id="cuatro">Ancla n&uacute;mero 4</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pulvinar odio. Pellentesque pharetra pulvinar
			erat, sit amet ornare sem sollicitudin a. Nunc at magna sed turpis tempus elementum nec non nibh. Suspendisse ac
			ligula non justo hendrerit varius non non tortor. Etiam iaculis massa nec neque dapibus imperdiet. Nunc vehicula
			congue ullamcorper. Proin at massa ante. Aliquam non tempus nibh. Fusce auctor consequat neque, quis commodo dui
			gravida mollis. Suspendisse potenti.
		</p>
	</div>
</div>
<div id="divEnlaces">
	<ul>
		<li><a class="unoClass" href="#uno">Ancla 1</a></li>
		<li><a class="dosClass" href="#dos">Ancla 2</a></li>
		<li><a class="tresClass" href="#tres">Ancla 3</a></li>
		<li><a class="cuatroClass" href="#cuatro">Ancla 4</a></li>
		<li><a class="contentClass" href="#initCont">Ir al inicio de la p&aacute;gina</a></li>
	</ul>
</div>

<script>
$(document).ready(function(){
	$('.carousel').carousel({
		interval: 2000
	});
});
</script>
</body>
</html>

