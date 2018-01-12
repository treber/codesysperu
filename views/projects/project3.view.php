<?php $page = 'Proyectos'; ?>
<?php include APP_PATH . '/views/overall/head.view.php'; ?>
<?php include APP_PATH . '/views/overall/header.view.php'; ?>
<?php include APP_PATH . '/views/projects/partials/headlist.view.php'; ?>

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
			<li>CSS</li>
			<li>MVC</li>
			<li>Base de datos MySQL</li>
			<li>Pasarela de pago</li>
		</ul>
	</div>
</section>

<?php include APP_PATH . '/views/projects/partials/footlist.view.php'; ?>
<?php include APP_PATH . '/views/overall/foot.view.php'; ?>