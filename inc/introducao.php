<style>
	.introducao-interna {
	background: url(<?php the_field('background_intro'); ?>) no-repeat center;
	background-size: cover;
}
</style>

<section class="introducao-interna">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<p><?php the_field('subtitle_intro') ?></p>
	</div>
</section>