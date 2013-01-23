<ul>
    <?php
    $arg = array('post_type' => 'works', 'posts_per_page' => 2, 'orderby' => 'rand');
    $loop = new WP_query($arg);

    if ($loop->have_posts()):
        while ($loop->have_posts()):
            $loop->the_post();
            ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(200, 200)); ?></a>
            </li>
            <?php
        endwhile;
    endif;
    ?>
</ul>