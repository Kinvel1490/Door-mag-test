<?php
/*
Template Name: О компании
*/
get_header(); ?>
  <!-- О компании -->
  <div class="about-company" style="background-image: url(<?= get_background_image() ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="<?= CFS()->get('about_img') ?>" alt="О компании">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Преимущества  -->
  <?php get_header( 'adv' ); ?>
  <!-- Технический паспорт -->
  <div class="pasport" style="background-image: url(<?= CFS()->get('t_pass_img') ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2><?= CFS()->get('t_passport') ?></h2>
          <p><?= CFS()->get('t_txt') ?></p>
          <a href="<?= CFS()->get('t_doc_file') ?>" class="btn" target="_blank"><?= CFS()->get('t_open_btn') ?></a>
          <a href="<?= CFS()->get('t_pdf_file') ?>" class="btn" download=""><?= CFS()->get('t_download_btn') ?></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
  <?php get_footer(  ); ?>