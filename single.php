<?php
get_header();
?>

<div class="content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <article class="single">
                <h2><?php the_title(); ?></h2>                
                <div class="portSingle">                    
                    <?php
                    if (preg_match('/ipad|SCH-I800/i', $_SERVER['HTTP_USER_AGENT'])) {
                        the_post_thumbnail('ipad');
                    } elseif (preg_match('/lg|iphone|blackberry|android|Mobile|psp/i', $_SERVER['HTTP_USER_AGENT'])) {
                        the_post_thumbnail('iphone');
                    } else {
                        the_post_thumbnail(array(800, 450));
                    }
                    ?>
                </div>
                    <?php the_content(); ?>
                <footer>
                    <p><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></p>
                    <p>
        <?php comments_number(); ?>
                    </p>
                </footer>
            </article>
            <section id="comments">
        <?php comments_template(); ?>
                <?php get_comments(); ?>
            </section>
                <?php
            endwhile;
        endif;
        ?>
</div>
    <?php
    get_footer();
    ?>