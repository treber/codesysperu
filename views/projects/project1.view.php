<?php $page = 'Proyectos'; ?>
<?php include APP_PATH . '/views/overall/head.view.php'; ?>
<?php include APP_PATH . '/views/overall/header.view.php'; ?>
<?php include APP_PATH . '/views/projects/partials/headlist.view.php'; ?>

<div id="container-modal">
	<div data-role="gallery-modal" id="gallery-modal" class="gallery-modal">	
		<section>
			<img src="img/tumovil/1-nosotros-tumovil.jpg" alt="">
		</section>
		<section>
			<img src="img/tumovil/2-servicios-tumovil.jpg" alt="">
		</section>
		<section>
			<img src="img/tumovil/3-rutas-tumovil.jpg" alt="">
		</section>
		<section>
			<img src="img/tumovil/4-distritos-tumovil.jpg" alt="">
		</section>
		<section>
			<img src="img/tumovil/5-registro-tumovil.jpg" alt="">
		</section>
	</div>
	<?php include APP_PATH . '/views/projects/partials/body.view.php'; ?>
		<ul id="check" class="check">
			<li>HTML5</li>
			<li>PHP</li>
			<li>Javascript</li>
			<li>CSS</li>
			<li>MVC</li>
			<li>Base de datos MySQL</li>
			<li>Pasarela de pago</li>
		</ul>
	</div>
</section>

<?php include APP_PATH . '/views/projects/partials/footlist.view.php'; ?>
<?php include APP_PATH . '/views/overall/foot.view.php'; ?>