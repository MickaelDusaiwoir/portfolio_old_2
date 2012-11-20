<?php
get_header();
?>
<div class="content">
    <div id="gallery">
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
                    <li>
                        <a href="<?php the_permalink(); ?>" title="Allez voir mes travaux"><?php the_post_thumbnail('medium'); ?></a>
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                    </li>                    
                    <?php
                endwhile;
            endif;
            ?>
        </ul>
    </div>
</div>
<?php
get_footer();
?>
