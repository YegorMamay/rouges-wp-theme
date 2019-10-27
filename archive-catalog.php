<?php get_header(); ?>

<section class="catalogs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="page-name">Каталог товаров</h1>
			</div>
		</div>

		<div class="row catalog">
			<?php
			$categories = get_terms(array(
				'taxonomy'     => 'sn_catalogs'
			));

			// var_dump($categories);

			foreach ($categories as $category) { ?>
				<div class="catalog__item col-md-6 col-lg-3">
					<a href="<?= get_term_link($category->term_id); ?>" class="catalog__link"><img src="<?php the_field('sn_img_cat', $category); ?>" alt="изображение категории" class="catalog__img-prod"></a>
					<div class="sp-xs-2"></div>
					<p class="catalog__title">
						<a href="<?= get_term_link($category->term_id, 'sn_catalogs'); ?>"><?= $category->name ?></a>
					</p>
					<div class="sp-xs-2"></div>
				</div>
			<?php } ?>
			<?php wp_reset_postdata(); ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>