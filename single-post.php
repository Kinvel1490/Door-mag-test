<?php
get_header(); ?>
  <!-- Страница одной двери -->
  <div class="door-template">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-12">
          <div class="door-gallery">
            <?php $portf = CFS()->get('galery');
              foreach ($portf as $elem) {?>
              <a href="<?= $elem['photo'] ; ?>" data-caption='<?= $elem['gal-descr']; ?>'>
                <img src="<?= $elem['photo'] ; ?>" alt='<?= $elem['gal-title']; ?>'>
              </a>
            <?php }?>
          </div>
        </div>
        <div class="col-6 col-lg-12 door-description">
          <h2><?php the_title(); ?>
          <span>
            <?php if (CFS()->get("is_in_stock")) {
              echo (CFS()->get("stock_true"));} else {
                echo (CFS()->get("stock_false"));} ?>
          </span></h2>
          <!-- <h2>Название <span>Под заказ</span></h2> -->
          <?php the_content(  ); ?>
          <h3><?= CFS()->get("price"); ?> &#8381;</h3>
          <?= do_shortcode( CFS()->get('shrt_code_frm'));?>
          <table>
            <caption><?= CFS()->get("table_caption"); ?></caption>
              <?php $charaters = CFS()->get('table_content');
              foreach ($charaters as $charater) { ?>
                <tr>
                  <td><?= $charater["char_key"] ?></td>
                  <td><?= $charater["char_value"] ?></td>
                </tr>
              <?php } ?>          
          </table>
          <a class="btn" href='information'>Полезная информация</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
<?php get_footer(); ?>