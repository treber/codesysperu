<?php $page = 'Proyectos'; ?>
<?php include APP_PATH . '/views/overall/head.view.php'; ?>
<?php include APP_PATH . '/views/overall/header.view.php'; ?>
<?php include APP_PATH . '/views/projects/partials/headlist.view.php'; ?>

<div id="container-modal">
	<div class="gallery-modal gm2">	
		<section>
			<img src="img/tumovil/app-tumovil-login.jpg" alt="">
		</section>
		<section>
			<img src="img/tumovil/app-tumovil-mapa.jpg" alt="">
		</section>
		<section>
			<img src="img/tumovil/app-tumovil-menu.jpg" alt="">
		</section>
		<section>
			<img src="img/tumovil/app-tumovil-registro.jpg" alt="">
		</section>
		<section>
			<img src="img/tumovil/app-tumovil-repass.jpg" alt="">
		</section>
	</div>
	<div class="close-modal">
		<div class="block-equis_proyect2">
			<a class="btn-close" href="#">&#88;</a>
		</div>
		<div class="block-row_proyect2">
			<img id="btn-prev" src="img/tumovil/arrow-left.svg" alt="">
			<img id="btn-next" src="img/tumovil/arrow-right.svg" alt="">
		</div>
	</div>
</div>
<section class="project-subdesc">
	<h3 class="logo-subtitle sub-project"><?= $project->name ?></h3>
	<div class="list-project">
		<div class="head-text">
			<span class="arrow-right"></span>
			<h4>Detalles del proyecto</h4>
		</div>
		<ul id="check" class="check">
			<li>HTML5</li>
			<li>PHP</li>
			<li>Javascript</li>
			<li>jQuery</li>
			<li>CSS</li>
			<li>MVC</li>
			<li>Base de datos MySQL</li>
			<li>Pasarela de pago</li>
		</ul>
	</div>
</section>

<?php include APP_PATH . '/views/projects/partials/footlist.view.php'; ?>
<?php include APP_PATH . '/views/overall/foot.view.php'; ?>