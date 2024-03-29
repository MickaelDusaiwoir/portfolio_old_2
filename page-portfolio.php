<?php
get_header();
?>
<div class="content">
    <section id="gallery">
        <h2 id="portfolio">
            <?php _e('Retrouvrez ici mes designs et conceptions') ?>
        </h2> 
        <?php
        $arg = array('post_type' => 'works');
        $loop = new WP_query($arg);
        ?>
        <ul>
            <?php
            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    ?>
                    <li itemscope itemtype="http://schema.org/Article">
                        <a href="<?php the_permalink(); ?>" title="Allez voir mes travaux" itemprop="url"><?php the_post_thumbnail('medium', 'itemprop="image"'); ?></a>
                        <h3 itemprop="name">
                            <?php the_title(); ?>
                        </h3>
                    </li>                    
                    <?php
                endwhile;
            endif;
            ?>
        </ul>
    </section>
</div>
<?php
get_footer();
?>
