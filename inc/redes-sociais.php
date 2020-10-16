<?php $contato = get_page_by_title('contato'); ?>

<ul>
  <?php if(have_rows('contato_social_networks', $contato)): while(have_rows('contato_social_networks', $contato)) : the_row(); ?>
  
  <li>
    <a href="<?php the_sub_field('contato_social_network_link'); ?>" target="_blank">
      <img src="<?php the_sub_field('contato_social_network_image'); ?>" alt="<?php the_sub_field('contato_social_network_name'); ?>">
    </a>
  </li>

	<?php endwhile; else : endif; ?>
</ul>