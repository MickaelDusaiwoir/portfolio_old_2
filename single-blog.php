<?php
get_header();
?>
<section id="content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <article <?php post_class(); ?>>
                <hgroup>
                    <h2><?php the_title(); ?></h2>
                    <h3><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></h3>
                </hgroup>
                <div class="thumb">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
                <div class="post_content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</section>

<?php comments_template(); ?>
<?php get_comments(); ?>
