<?php if (have_posts()): ?>
    <div class="js-ajax-posts">
        <article id="post_<?php the_ID() ?>" class="row">
        <?php while (have_posts()): the_post(); ?>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="<?php echo get_permalink(); ?>" class="cat-img"><?php the_post_thumbnail('medium'); ?></a>
                    <div class="sp-xs-1"></div>
                    <div class="h6 text-center"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
            <div class="sp-xs-4"></div>
            </div>
        <?php endwhile; ?>
        </article>
    </div>

    <?php if (get_theme_mod('bw_load_more_enable') && function_exists('bw_load_more')) { ?>
        <div class="text-center"><?php bw_load_more(); ?></div>
    <?php } else {
        if (function_exists('bw_pagination')) {
            bw_pagination();
        } else {
            if (is_paged()) { ?>
                <ul class="pagination">
                    <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Previous', 'brainworks')) ?></li>
                    <li class="newer"><?php previous_posts_link(__('Next', 'brainworks') . ' <i class="fa fa-arrow-right"></i>') ?></li>
                </ul>
            <?php }
        }
    } ?>

<?php else : ?>
    <?php get_template_part('loops/content', 'none'); ?>
<?php endif; ?>