		<div>
			<span class="forward-project"></span>
			<p class="contact-project">Contáctame para que Codesysperu te ayude con el diseño y desarrallo de un <a href="/contacto"><strong>proyecto web</strong></a> similar para tu negocio o empresa. </p>
		</div>	
			</div>
			<section class="container-bottom">
				<?php foreach ($rest as $next): ?>
					<div class="container-ls project-bottom">
						<div class="logo-main logo-projects">
							<figure class="fade">
								<img src="<?= PUBLIC_PATH . '/img/projects/' . $next->image ?>" alt="proyecto de codesysperu.com">
								<a class="effect" href="<?= PUBLIC_PATH . '/proyecto?id=' . $next->id ?>">
									<div class="effect-group">
										<h3 class="logo-subtitle"><?= $next->name ?></h3>	
										<p><?= $next->caption ?></p>
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
					</div>	
				<?php endforeach; ?>
			</section>
		</div>	
	</section>	
</main>