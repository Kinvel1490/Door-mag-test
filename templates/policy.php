<?php
/*
Template Name: Политика конфиденциальности
*/
get_header(); ?>
  <!-- Текст политики конфиденциальности -->
  <div class="policy" style="background-image: url('<?= get_background_image();?>')">
    <div class="container">
      <div class="row">
      <h2><?php the_title( ); ?></h2>
        <?php the_content( );?>
      </div>
    </div>
  </div>
  <!-- Футер -->
<?php get_footer(  );