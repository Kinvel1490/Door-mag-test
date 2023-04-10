<?php get_header() ?>
  <!-- Каталог -->
	<div class="popular" style="background-image: url(<?= get_background_image(); ?>)">
		<div class="container">
			<div class="row popular-title">
				<h2><?= single_cat_title(); ?></h2>
			</div>
			<div class="category-controll text-center">
				<button class="btn" type="button" data-filter="all">Все</button>
				<button class="btn" type="button" data-filter=".<?= get_category(14, ARRAY_A)['slug'] ?>"><?= get_category(14, ARRAY_A)['name'] ?></button>
				<button class="btn" type="button" data-filter=".<?= get_category(15, ARRAY_A)['slug'] ?>"><?= get_category(15, ARRAY_A)['name'] ?></button>
				<button class="btn" type="button" data-filter=".<?= get_category(16, ARRAY_A)['slug'] ?>"><?= get_category(16, ARRAY_A)['name'] ?></button>
				<button class="btn" type="button" data-sort="order:asc">По возрастанию</button>
				<button class="btn" type="button" data-sort="order:descending">По убыванию</button>
			</div>
			<div class="row popular-goods catalog">
			<?php 
			if(have_posts()) {
				while (have_posts()) {
					the_post();
					$all_cats = get_the_category();
					$res_name = '';
					foreach($all_cats as $cat) {
						if($cat->term_id == 14 || $cat->term_id == 15 || $cat->term_id == 16) {
							$res_name = $cat->slug;
						}
					}
					?>
					<div class="col-3 col-lg-6 col-sm-12 product mix <?= $res_name ?>" data-order="<?= CFS()->get("price"); ?>">
						<?php the_post_thumbnail(); ?>
						<h3><?php the_title(); ?></h3>
						<div><?= CFS()->get("price"); ?> &#8381;</div>
						<a href="<?php the_permalink(); ?>" class="btn"><?= CFS()->get("door_btn_txt"); ?></a>
					</div>
					<?php
				}
			}?>
			</div>
			<?php the_posts_pagination(); ?>
		</div>
	</div>
  <!-- Футер -->
<?php get_footer(  ) ?>