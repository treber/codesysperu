<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<meta name="author" content="Eberth"/>
	<meta name="description" content="Codedev"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?= $inicio ?? 'Proyectos' ?> | Codesys</title>
	<link rel="stylesheet" href="<?= PUBLIC_PATH ?>/css/styles.css"/>
	<link rel="stylesheet" href="<?= PUBLIC_PATH ?>/css/codesys-fontello.css"/>
</head>
<body>
	<header id="header">
		<div class="container-group">
			<h1 class="logo-word">Codesys</h1>
			<input type="checkbox" id="check-menu">
			<label for="check-menu" class="icon-menu"></label>
			<nav class="nav-menu">	
				<ul class="menu">
					<li class="menu-item">
						<a class="menu-link" href="<?= PUBLIC_PATH ?>/">Inicio</a>
					</li>
					<li class="menu-item">
						<a class="menu-link" href="<?= PUBLIC_PATH ?>/nosotros">Servicios</a>
					</li>
					<li class="menu-item">
						<a class="menu-link" href="<?= PUBLIC_PATH ?>/proyectos">Proyectos</a>
					</li>
					<li class="menu-item">
						<a class="menu-link" href="<?= PUBLIC_PATH ?>/contacto">Contacto</a>
					</li>
				</ul>		
			</nav>	
		</div>
	</header>
	<main id="main">
		<div class="container-group">
			<section id="banner">
				<div class="welcome-banner">
					<h2 class="banner-h2">Bienvenido a Codesys</h2>
					<h3 class="banner-h3">Diseño y Desarrollo Web</h3>
				</div>
			</section>			
			<section id= "section-intro">
				<div class="container-intro">
					<div class="container-ls">
						<div class="logo-section"><span class="ls1"></span></div>
						<h3 class="logo-subtitle">Permíteme ser parte de tu crecimiento</h3>
						<p class="logo-description">Diseño y desarrollo Web para empresas y particulares.<br>
							La calidad de su sitio web tiene que manifestar la calidad de sus productos y servicios porque es la carta de presentación ante el mundo.
						</p>
					</div>
					<div class="container-ls">
						<div class="logo-section"><span class="ls2"></span></div>	
						<h3 class="logo-subtitle">Misión</h3>
						<p class="logo-description">Construir un futuro mejor para el Perú. El objetivo es que los emprendedores peruanos expandan su actividad gracias al uso de tecnologías que son la principal herramienta para transpasar fronteras y que esté por encima de sus competidores.</p>
					</div>
					<div class="container-ls">
						<div class="logo-section"><span class="ls3"></span></div>
						<h3 class="logo-subtitle">Visión</h3>
						<p class="logo-description">Ser participe en la implementación de soluciones tecnológicas de desarrollo web para su empresa, negocio o tu startup que estés por iniciar.</p>
					</div>
				</div>
			</section>	
		</div>
	</main>
	<footer id="footer">
		<div class="container-group">
			<div class="vertical-footer">
				<div class="vf acerca">
					<h4 class="acerca-title">Codesys</h4>
					<p class="acerca-description">Diseño y desarrollo web para empresas, negocios o startups</p>
				</div>
				<div class="vf contacto">
					<h4 class="contacto-title">Contacto</h4>
					<ul class="contacto-menu">
						<li class="cm-item">
							<span class="icon-location"></span>Lima-Perú
						</li>
						<li class="cm-item">
							<span class="icon-mail-alt"></span>codesys@gmail.com
						</li>
						<li class="cm-item">
							<span class="icon-phone"></span>993-132773
						</li>
					</ul>
				</div>
				<div class="vf sociales">
					<h4 class="social-title">Sígueme en</h4>
					<ul class="social-menu">
						<li class="sm-item">
							<a class="icon-facebook" href="https://facebook.com"></a>
						</li>
						<li class="sm-item">
							<a class="icon-twitter" href="https://twitter.com"></a>
						</li>
						<li class="sm-item">
							<a class="icon-gplus" href="https://plus.google.com"></a>
						</li>
						<li class="sm-item">
							<a class="icon-linkedin" href="https://www.linkedin.com"></a>
						</li>
					</ul>	
				</div>
			</div>
		</div>	
			<div class="vh copy">
				<div class="copy-footer">
					<p class="copy">Copyright <?php echo COPYRIGHT ?></p>
				</div>
			</div>
	</footer>
</body>
</html>