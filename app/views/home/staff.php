<?php

get_header(); ?>


	<div class="main row" role="main">
		<div class="small-12 medium-8 large-8 columns">
			<?php if (have_posts()) : while (have_posts()) : the_post();
				the_content();
			endwhile; endif; ?>
			<hr>

			<?php
				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'post_type' => 'staff',
					'posts_per_page' => 4,
					'orderby'=> 'date',
					'order' => 'DESC',
					'paged' => $paged
				);
				query_posts($args);
			?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<!-- check for image -->
				<?php if( has_post_thumbnail() ) { ?><figure class="listing-image"><?php the_post_thumbnail() ?></figure><?php }?>
				<div class="listing-info<?php if( has_post_thumbnail() ) { ?> has-image<?php }?>">
					<!-- all of the info, if it exists -->
					<a href="<?php the_permalink()?>"><h3><?php the_title() ?></h3></a>

					<p><?php $phone = get_post_meta($post->ID, "_phone", true); if ( !empty( $phone ) ) { ?><?php echo $phone ?><?php } ?></p>
					<?php $email = get_post_meta($post->ID, "_email", true); if ( !empty( $email ) ) { ?><a href="mailto:<?php echo $email ?>">Email</a><?php } ?>
					<?php $link = get_post_meta($post->ID, "_link", true); if ( !empty( $link ) ) { ?><a href="mailto:<?php echo $link ?>"><?php echo $link ?></a><?php } ?>
				</div>
			<?php endwhile; ?>

			<div class="navigation cf">
				<div class="paging left"><?php previous_posts_link('Previous') ?></div>
				<div class="paging right"><?php next_posts_link('Next') ?></div>
			</div>
			<?php wp_reset_query(); ?>
		</div>

		<?php get_sidebar(); ?>

	</div>
