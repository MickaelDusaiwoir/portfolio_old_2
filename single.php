<?php
get_header();
?>

<div class="content">
    <div id="single"> 
        <article>                   
            <div id="image"> 
                <?php include "slide.php" ?>
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        ?>

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

                    <div id="infoSingle">
                        <h1><?php the_title(); ?></h1>
                        <p id="date"><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></p>
                        <?php the_content(); ?>
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