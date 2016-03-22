<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'inc/head_common.php'; ?>
	<title>SHERPA | ¿Estás buscando más información acerca de Sherpa?</title>
	<link rel="icon" href="img/favicon.ico" />
	<meta name="keywords" content="diseñador grafico,imagen corporativa,logotipos,paginas web,brand design,empresas de publicidad en mexico,empresa publicidad,agencias de publicidad en hermosillo" />
	<meta name="description" content="¿Estás buscando más información acerca de Sherpa?">
	<meta property="fb:admins" content="100005270866810" />
	<meta property="og:title" content="SHERPA | Design Estudio" />
	<meta property="og:url" content="http://www.estudiosherpa.com" />
	<meta property="og:image" content="http://www.estudiosherpa.com/img/slider-montesco2.jpg"/>
	<meta property="og:description" content="Estudio de diseño especializado en escalar con las marcas hasta conseguir sus metas más altas. Somos profesionales, somos guías de negocio, somos SHERPA."/>
	<meta property="fb:page-id" content="693993800674719"/>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		function initialize() {
			var latlng = new google.maps.LatLng(29.09437779550479, 609.0416407245638);
			var settings = {
				zoom: 17,
				center: latlng,
				mapTypeControl: true,
				mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
				navigationControl: true,
				navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
				mapTypeId: google.maps.MapTypeId.ROADMAP};
			var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
			var companyImage = new google.maps.MarkerImage('img/icono.png',
				new google.maps.Size(41,58),
				new google.maps.Point(0,0),
				new google.maps.Point(20,40)
			);

			var companyShadow = new google.maps.MarkerImage('img/logo_shadow.png',
				new google.maps.Size(41,58),
				new google.maps.Point(0,0),
				new google.maps.Point(40, 50));

			var companyPos = new google.maps.LatLng(29.09437779550479, 609.0416407245638);

			var companyMarker = new google.maps.Marker({
				position: companyPos,
				map: map,
				icon: companyImage,
				shadow: companyShadow,
				title:"SHERPA",
				zIndex: 3});
		}
	</script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="initialize()">
	<?php include 'inc/header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 hidden-md hidden-sm hidden-lg">
				<img class="hola-img" src="img/hola.jpg" alt="Hola">
			</div>
			<div class="hidden-xs col-sm-12" id="hola">
				<img class="hola-img" src="img/hola.jpg" alt="Hola">
			</div>
			<div class="col-sm-12 hidden-xs">
				<p><span class="book rojo titulo-escritorio">¿Estás buscando más información acerca de Sherpa ?</span><br><span class="titulo-escritorio2 gris">Envíanos tus preguntas y solicitudes. Queremos saber de ti.</span><br><span class="rojo">_</span></p>
			</div>
			<div class="col-xs-12 hidden-sm hidden-md hidden-lg" id="movil">
				<p><span class="book rojo">¿Estás buscando más información acerca de Sherpa ?</span><br><span class="gris">Envíanos tus preguntas y solicitudes. Queremos saber de ti.</span><br><span class="rojo">_</span></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-9">
				<form class="form-horizontal" method="post" action="mandar.php">
					<div class="form-group">
						<label class="col-sm-2">Nombres</label>
						<div class="col-sm-10">
							<input type="text" class="form-control campos" id="nombre" name="nombre" placeholder="Nombres" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2">Teléfono</label>
						<div class="col-sm-10">
							<input type="number" class="form-control campos" id="telefono" name="telefono" placeholder="Teléfono">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control campos" id="email" name="email" placeholder="Email" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2">Empresa</label>
						<div class="col-sm-10">
							<input type="text" class="form-control campos" id="empresa" name="empresa" placeholder="Empresa">
						</div>
					</div>					
					<div class="form-group">
						<label class="col-sm-2">Mensaje</label>
						<div class="col-sm-10">
							<textarea class="form-control campos" id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Enviar</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-xs-12 col-sm-3">
				<p>
					<span class="sherpa-grande rojo">SHERPA®</span><br>
					Yañez No. 79, colonia San Benito,<br>
					Hermosillo,Sonora, México,<br>
					C.P. 83190<br>
					<span class="rojo">T. (662)311-0381</span>
				</p>
				<p>
					<span class="rojo">Proyectos</span><br>
					escala@estudiosherpa.com
				</p>
				<p>
					<span class="rojo">Empleo</span><br>
					careers@estudiosherpa.com
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="mapa" id="map_canvas" style="width:100%;height:320px;margin:auto;border:none;background-color:#f6303e;margin-bottom: 20px;margin-top: 40px"></div>
			</div>
		</div>
	</div>
	<?php include 'inc/footer.php'; ?>
	<?php include 'inc/footer_common.php'; ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-54499128-2', 'auto');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
	</script>
</body>
</html>