<?php
/*
Template Name: Портфолио
*/
get_header(); ?>
  <!-- Наши работы -->
  <div class="portfolio" style="background-image: url('<?= get_background_image(); ?>')">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="gallery">
            <?php $portf = CFS()->get('portfol');
            foreach ($portf as $elem) {?>
            <a href="<?= $elem['port_img'] ; ?>" data-caption='<?= $elem['port_descrit']; ?>'>
              <img src="<?= $elem['port_img'] ; ?>" alt='<?= $elem['port_title']; ?>'>
            </a>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
  <?php get_footer(  ); ?>