<?php $portfolio = get_page_by_title('portfolio'); ?>

<ul class="portfolio_lista rslides_portfolio">
	<?php if(have_rows('portfolio_item', $portfolio)): while(have_rows('portfolio_item', $portfolio)) : the_row(); ?>

		<li>
			<div class="grid-8">
				<img src="<?php the_sub_field('portfolio_item_image01', $portfolio); ?>" alt="<?php the_sub_field('portfolio_item_image01_desc', $portfolio); ?>">
			</div>

			<div class="grid-8">
				<img src="<?php the_sub_field('portfolio_item_image02', $portfolio); ?>" alt="<?php the_sub_field('portfolio_item_image02_desc', $portfolio); ?>">
			</div>

			<div class="grid-16">
				<img src="<?php the_sub_field('portfolio_item_image03', $portfolio); ?>" alt="<?php the_sub_field('portfolio_item_image03_desc', $portfolio); ?>">
			</div>
		</li>
	
	<?php endwhile; else : endif; ?>
</ul>

<?php if (!is_page('portfolio')) : ?>
	<div class="call">
		<p><?php the_field('portfolio_call', $portfolio); ?></p>
		<a href="./portfolio" class="btn">Portfólio</a>
	</div>
<?php endif; ?>