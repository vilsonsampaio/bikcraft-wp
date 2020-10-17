<?php $contato = get_page_by_title('contato'); ?>
		<style>
			.quebra {
				background-image: url(<?php the_field('footer_background', $contato); ?>);
			}
		</style>
		
		<div class="quebra">
			<blockquote class="quote-externo container">
				<?php the_field('footer_quote', $contato); ?>
				<cite><?php the_field('footer_author', $contato); ?></cite>
			</blockquote>
		</div>

		<footer> 
			<div class="footer"> 
				<div class="container">
					<div class="grid-8 footer_historia">
						<h3>Nossa História</h3>

						<?php the_field('contato_story_resume', $contato); ?>
					</div>

					<div class="grid-4 footer_contato">
						<h3>Contato</h3>

						<ul>
							<li>- <?php the_field('contato_phone', $contato); ?></li>
							<li>- <?php the_field('contato_mail', $contato); ?></li>
							<li>- <?php the_field('contato_address02', $contato); ?></li>
						</ul>
					</div>

					<div class="grid-4 footer_redes">
						<h3>Redes sociais</h3>

						<?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
					</div>
				</div>
			</div>

			<div class="copy">
				<div class="container">
					<p class="grid-16"><?php bloginfo('name'); ?> <?php echo date('Y'); ?> - Alguns direitos reservados.</p>
				</div>
			</div>
		</footer>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60088262-1', 'auto');
	  ga('send', 'pageview');

	</script>


	<!-- INÍCIO WORDPRESS FOOTER -->
	<?php wp_footer(); ?>
	<!-- FINAL WORDPRESS FOOTER -->
	
	</body>
</html>