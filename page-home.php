<?php
get_header();
?>
<div id="content">
    <section id="bgslide">
        <div id="slider">
            <a href="portfolio">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/slider/s1.png" title="Screen website" />
            </a>
            <a href="portfolio">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/slider/s2.png" title="Screen website" />
            </a>
            <a href="portfolio">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/slider/s3.png" title="Screen website" />
            </a>
            <a href="portfolio">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/slider/s4.png" title="Screen website" />
            </a>
        </div>
    </section> 
    <section class="info">
        <h1><?php bloginfo('description'); ?></h1>
        <p>
            <?php _e('Je suis Mickael Dusaiwoir, un jeune infographiste passionné par mon travail.  
                    Je conçois et développe des sites internet en PHP et HTML, ainsi que des designs pour ces derniers. 
                    Mais également des jeux vidéo, des player et autres applications en JavaScript. 
                    Je possède quelques connaissances en action script. 
                    Je suis détérminé et avide de connaisance.  '); ?>
        </p>
    </section>
    <section class="info">
        <h2><?php _e('Mes derniers travaux'); ?></h2>
        <div id="tvx">
            <?php
            $arg = array('post_type' => 'works', 'posts_per_page' => 3);
            $loop = new WP_query($arg);

            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    ?>
                    <a href="portfolio" title="Aller voir mes travaux"><?php the_post_thumbnail(array(200, 300)); ?></a>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>

</div>
<?php
get_footer();
?>
