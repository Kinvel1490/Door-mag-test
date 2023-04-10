<?php
/*
Template Name: На заказ
*/
get_header(); ?>
  <!-- На заказ -->
  <div class="to-order">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- На заказ -->
          <?php $orders = get_posts( [
            'numberposts' => -1,
						'category' => 6,
						'orderby' => "ID",
						'order' => "ASC",
						'post_type' => 'post'
          ] );
          foreach ($orders as $post) { 
            setup_postdata( $post )?>
          <div class="to-order-card">
            <h2><?php the_title(); ?></h2>
            <div class="to-order-card-inner">
            <?php the_post_thumbnail( '' ); ?>
              <div class="to-order-text">
                <?php the_content(  ); ?>
                <p><?= CFS()->get('order_comms') ?></p>
              </div>
            </div>
          </div>
          <?php }; wp_reset_postdata();?>
          <!-- Форма -->
          <div class="to-order-form">
            <h3><?= CFS()->get('call_back');?></h3>
            <?= do_shortcode( CFS()->get('cont-7-shc'));?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
  <?php get_footer(  ); ?>