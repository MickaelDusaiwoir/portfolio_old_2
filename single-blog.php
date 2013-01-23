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
                <h2><?php the_title(); ?></h2>
                <p id="date"><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></p>
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
<section id="commentaire">
    <?php comments_template(); ?>
    <?php get_comments(); ?> 
</section>

