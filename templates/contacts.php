<?php
/*
Template Name: Контакты
*/
get_header(); ?>
  <!-- Контакты -->
  <div class="our-contacts">
    <div class="container">
      <div class="row">
        <div class="col-9 col-lg-12">
            <?php $fil = CFS()->get('fil-loop');
                foreach ($fil as $elem) {?>
                  <div class="contacts-block">
                    <h2><?= $elem['head-dealer'] ?></h2>
                  <div class="contacts-inner">
                    <div class="contacts-card">
                      <img src="<?= CFS()->get('pishite_ico'); ?>" alt="пишите">
                      <h3><?= CFS()->get('Pishite') ?></h3>
                      <p><?= $elem['mail']; ?></p>
                    </div>
                    <div class="contacts-card">
                      <img src="<?= CFS()->get('zvonite_ico'); ?>" alt="звоните">
                      <h3><?= CFS()->get('zvonite'); ?></h3>
                      <p><?= $elem['phone']; ?></p>
                    </div>
                    <div class="contacts-card">
                      <img src="<?= CFS()->get('goh_ico'); ?>" alt="приезжайте">
                      <h3><?= CFS()->get('get_over_here'); ?></h3>
                      <p><?= $elem['adr']; ?></p>
                    </div>
                  </div>
                  <?= $elem['map'] ?>
              </div>
            <?php }?>
        </div>
        <div class="col-3 col-lg-12" id="cities">
          <h2><?= CFS()->get("dealers_head") ?></h2>
          <input type="text" class="search" placeholder="Поиск">
          <ul class="list">
            <?php
            $dealres = CFS()->get("dealer_loop");
              foreach ($dealres as $dealer) { ?>
               <li><p class="city"><?= $dealer["dealer_txt"] ?></p></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
<?php get_footer()?>
</html>