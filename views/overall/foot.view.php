	<footer id="footer">
		<div class="container-group">
			<div class="vertical-footer">
				<div class="vf acerca">
					<h4 class="acerca-title">Codesys Perú</h4>
					<p class="acerca-description"><a href="/" class="linkinicio">Diseño y desarrollo web</a> para empresas, negocios o startups.</p>
					<p><a href="/servicios" class="linkpages">Codesysperu &#8211; Servicios</a></p>
					<p><a href="/proyectos" class="linkpages">Codesysperu &#8211; Proyectos</a></p>
					<p><a href="/contacto" class="linkpages">Codesysperu &#8211; Contacto</a></p>

				</div>
				<div class="vf contacto">
					<h4 class="contacto-title">Contacto</h4>
					<ul class="contacto-menu">
						<li class="cm-item">
							<span class="icon-location"></span>Lima &#8211; Perú
						</li>
						<li class="cm-item">
							<span class="icon-mail-alt"></span>codesys.pe@gmail.com
						</li>
						<li class="cm-item">
							<span class="icon-phone"></span>&#43;51 993 132 773
						</li>
					</ul>
				</div>
				<div class="vf sociales">
					<h4 class="social-title">Sígueme en</h4>
					<ul class="social-menu">
						<li class="sm-item">
							<a class="icon-facebook" href="https://facebook.com/codesysperu" target="_blank" title="Facebook"></a>
						</li>
						<li class="sm-item">
							<a class="icon-twitter" href="https://twitter.com/codesysperu" target="_blank" title="Twitter"></a>
						</li>
						<li class="sm-item">
							<a class="icon-linkedin" href="https://www.linkedin.com/codesysperu" target="_blank" title="LinkedIn">
							</a>
						</li>
						<li class="sm-item">
							<a class="icon-gplus" href="https://plus.google.com/codesysperu" target="_blank" title="Google&#43;">
							</a>
						</li>
					</ul>	
				</div>
			</div>
		</div>	
			<div class="vh copy">
				<div class="copy-footer">
					<p class="copy"><?php echo COPYRIGHT ?></p>
				</div>
			</div>
	</footer>
	<script src="<?= PUBLIC_PATH ?>/js/validar.js"></script>
	<script src="<?= PUBLIC_PATH ?>/js/form.js"></script>
	<script src="<?= PUBLIC_PATH ?>/js/modal-slider.js"></script>
	<script type= "text/javascript">
		$(document).ready(function(){
			
				$('#link-<?= $page ?>').addClass('active');
			
		});
	</script>

</body>
</html>