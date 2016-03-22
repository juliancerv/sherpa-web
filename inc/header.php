<header id="main-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
				<h1><a href="index.php"><img id="main-logo" src="img/logo.jpg" alt="SHERPA"></a></h1>
			</div>
			<div class="col-xs-9">
				<ul id="main-menu" class="nav nav-pills hidden-xs">
				  <li class="<?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "active" : "");?>"><a href="index.php">Inicio</a></li>
				  <li class="<?php echo ($_SERVER['PHP_SELF'] == "/sherpa.php" ? "active" : "");?>"><a href="sherpa.php">SHERPA</a></li>
				  <li class="<?php echo ($_SERVER['PHP_SELF'] == "/contacto.php" ? "active" : "");?>"><a href="contacto.php">Contacto</a></li>
				  <li><a href="#">English</a></li>
				</ul>
			</div>
			<a href="#" id="mobile-menu-button" class="btn btn-default visible-xs">
				<span class="glyphicon glyphicon-th-list"></span>
			</a>
		</div>
	</div>
	<div class="visible-xs">
		<ul id="mobile-main-menu">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="sherpa.php">SHERPA</a></li>
			<li><a href="contacto.php">Contacto</a></li>
			<li><a href="#">English</a></li>
		</ul>
	</div>
</header>