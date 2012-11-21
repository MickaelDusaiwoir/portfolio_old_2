<?php
get_header();
?>

<div class="content">
    <div id="single"> 
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <article>
                    <div id="infoSingle">
                        <h1><?php the_title(); ?></h1>
                        <?php the_excerpt(); ?>
                        <?php the_content(); ?>
                        <p><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></p>
                    </div>

                    <div id="image">                    
                        <?php
                        if (preg_match('/ipad|SCH-I800/i', $_SERVER['HTTP_USER_AGENT'])) {
                            the_post_thumbnail('ipad');
                        } elseif (preg_match('/lg|iphone|blackberry|android|Mobile|psp/i', $_SERVER['HTTP_USER_AGENT'])) {
                            the_post_thumbnail('iphone');
                        } else {
                            the_post_thumbnail(array(617, 300));
                        }
                        ?>
                    </div>
                </article>
                <section>
                    <?php comments_template(); ?>
                    <?php get_comments(); ?>
                </section>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
<?php
get_footer();
?>