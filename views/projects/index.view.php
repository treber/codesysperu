<?php $page = 'Proyectos'; ?>
<?php include APP_PATH . '/views/overall/head.view.php'; ?>
<?php include APP_PATH . '/views/overall/header.view.php'; ?>

<?php include APP_PATH . '/views/projects/partials/title.view.php'; ?>

		<!-- Contenido de los projects-->
		<div class="container-intro ci-project">
			<?php foreach ($projects as $project): ?>
				<div class="container-ls">
					<figure class="fade">
						<img src="<?= PUBLIC_PATH . '/img/projects/' . $project->image ?>" alt="proyecto de codesysperu.com" />
						<a class="effect" href="<?= PUBLIC_PATH . '/proyecto?id=' . $project->id ?>">
							<div class="effect-group">
								<h3 class="logo-subtitle"><?= $project->name ?></h3>
								<p><?= $project->caption ?></p>
								<div class="view-details">
									<span>
										<img src="<?= PUBLIC_PATH . '/img/projects/view_more_black.png' ?>" alt="" />
										<p>Ver detalles</p>
									</span>
								</div>
							</div>
						</a>
					</figure>	
				</div>
			<?php endforeach; ?>	
		</div>
	</section>	
</main>
<?php include APP_PATH . '/views/overall/foot.view.php'; ?>