	<!-- Преимущества  -->
	<div class="advantages" style="background-image: url(<?= CFS()->get('fon');?>)">
		<div class="container">
			<h2><?= get_cat_name( 5 ); ?></h2>
		</div>
	</div>
	<div class="advantages-cards" style="background-image: url(<?= get_background_image();?>)">
		<div class="container">
			<div class="row advantages-cards-inner">
					<?php $posts = get_posts([
						'numberposts' => -1,
						'category' => 5,
						'orderby' => "ID",
						'order' => "ASC",
						'post_type' => 'post'
					]);
					foreach ($posts as $post) {
						setup_postdata( $post );
					?>
					<div class="col-4 col-lg-6 col-sm-12 advantages-card">
					<?php the_post_thumbnail( 'adv_thumb' ); ?>
					<h3><?php the_title( ); ?></h3>
					<p><?php the_content();?></p>
					</div>
					<?php };
					wp_reset_postdata();?>				
			</div>
		</div>
	</div>