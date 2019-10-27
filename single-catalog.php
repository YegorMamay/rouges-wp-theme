<?php get_header(); ?>

<section class="page-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (!is_front_page() && function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.row -->
</section>

<section class="page-catalog">
    <div class="container">
        <div class="row">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="col-lg-5">
                        <?php the_post_thumbnail(); ?>
                        <div class="sp-xs-2"></div>
                    </div>
                    <div class="col-lg-7">
                        <h1 class="single-title"><?php the_title() ?></h1>
                        <hr>
                        <div class="page-catalog__content"><?php the_content() ?></div>
                        <button class="btn btn-secondary btn-lg one-click">Заказать</button>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>