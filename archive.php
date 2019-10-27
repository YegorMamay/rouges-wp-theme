<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 hide-on-mobile">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
            <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>
            <h1 class="text-center"><?php echo single_cat_title(); ?></h1>
            <div class="sp-xs-3"></div>
            <?php get_template_part('loops/content-cat', get_post_format()); ?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>

