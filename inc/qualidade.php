<?php $sobre = get_page_by_title('sobre'); ?>
<section class="qualidade container">
	<h2 class="subtitulo"><?php the_field('qualidade_title', $sobre); ?></h2>
	<img src="<?php the_field('qualidade_logo', $sobre); ?>" alt="Bikcraft">

	<ul class="qualidade_lista">

		<?php if(have_rows('qualidade_item', $sobre)): while(have_rows('qualidade_item', $sobre)) : the_row(); ?>
	
			<li class="grid-1-3">
				<h3><?php the_sub_field('qualidade_item_title', $sobre); ?></h3>
				<p><?php the_sub_field('qualidade_item_desc', $sobre); ?></p>
			</li>

		<?php endwhile; else : endif; ?>
		
	</ul>

	<?php if (!is_page('sobre')) : ?>
		<div class="call">
			<p><?php the_field('sobre_call', $sobre); ?></p>
			<a href="./sobre" class="btn btn-preto">Sobre</a>
		</div>
	<?php endif; ?>

</section>