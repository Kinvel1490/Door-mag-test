<?php
/*
Template Name: Главная
*/
get_header(); ?>
	<div class="header" style="background-image: url(<?= CFS()->get("header_bg"); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-12">
					<div class="header-inner">
						<div class="header-catalog">
							<h2><?= get_category(4)->name; ?></h2>
							<div class="doors">
								<div class="door">
									<div class="name" style="background-image: url(<?= CFS()->get("doors_deaf_main"); ?>)">Модели <?= get_category( 14 )->name ?></div>
								</div>
								<div class="door">
									<div class="name" style="background-image: url(<?= CFS()->get("doors_glass_main"); ?>)">Модели <?= get_category( 15 )->name ?></div>
								</div>
								<div class="door">
									<div class="name" style="background-image: url(<?= CFS()->get("doors_inc_main"); ?>)"><?= get_category( 16 )->name ?></div>
								</div>
							</div>
							<a class="btn" href='category/<?= get_category(4)->slug; ?>'>Смотреть</a>
						</div>
						<div class="header-order">
							<h2><?= CFS()->get("order_main"); ?></h2>
							<div class="doors">
								<?php $doors = CFS()->get("Order_main");
								foreach ($doors as $door) { ?>
									<div class="door">
										<div class="name" style="background-image: url(<?= $door["order_main_pic"]; ?>)"><?= $door["order_main_txt"]; ?></div>
									</div>
								<?php } ?>
							</div>
							<a class="btn" href="<?= get_page_link( 33 ); ?>">Смотреть</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Преимущества  -->
	<?php get_header( 'adv' ); ?>

	<!-- О нас -->
	<div class="about" style="background-image: url(<?= CFS()->get("about_main"); ?>)">
		<div class="container">
			<div class="row about-inner">
				<div class="col-6 col-lg-12">
					<h2><?= CFS()->get("about_main_h"); ?></h2>
					<p><?= CFS()->get("about_main_txt"); ?></p>
				</div>
				<div class="col-6 col-lg-12 text-center">
					<a href="category/<?= get_category(4)->slug; ?>" class="btn"><?= CFS()->get("aboutn_main_btn"); ?></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Популярные товары -->
	<div class="popular" style="background-image: url(<?= get_background_image(); ?>)">
		<div class="container">
			<div class="row popular-title">
				<h2><?= CFS()->get("pops"); ?></h2>
			</div>
			<div class="row popular-goods">
				<?php $settings = get_posts([
						'numberposts' => -1,
						'category_name' => "popular",
						'post_type' => 'post'
					]);
					foreach ($settings as $post) {
						setup_postdata( $post );
					?>
						<div class="col-3 col-lg-6 col-sm-12 product">
							<?php the_post_thumbnail(); ?>
							<h3><?php the_title(  ); ?> </h3>
							<div><?= CFS()->get("price"); ?> &#8381;</div>
							<a href="<?php the_permalink(); ?>" class="btn">Подробнее</a>
						</div>
					<?php };
				wp_reset_postdata();?>	


			</div>
			<div class="row">
				<div class="col-12 text-center">
					<a href="catalog.html" class="btn">Перейти в каталог</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Форма обратной связи -->
	<div class="contacts" style="background-image: url(<?= CFS()->get("img_bg_main_cont"); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-4 col-lg-12 contacts-item">
					<h3><?= CFS()->get("head_main_cont"); ?></h3>
					<p><?= CFS()->get("txt_main_cont"); ?></p>
					<?= do_shortcode( CFS()->get('shrtcd_main_cont'));?>
				</div>

				<?php $settings = get_posts([
						'numberposts' => 2,
						'category_name' => "form_main_cards",
						'post_type' => 'post'
					]);
					foreach ($settings as $post) {
						setup_postdata( $post );
					?>
					<div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
						<?php the_post_thumbnail(); ?>
						<h3><?php the_title(  ); ?></h3>
						<p><?php the_content(  ); ?></p>
					</div>
					<?php };
				wp_reset_postdata();?>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>