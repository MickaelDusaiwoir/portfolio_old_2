<?php
get_header();
?>
<div class="content">
    <div id="moi">
        <div id="presentation">
            <?php
            $arg = array('post_type' => 'about', 'posts_per_page' => 1);
            $loop = new WP_query($arg);

            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    ?>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <div id="tvxHasard">
            <a href="<?php the_permalink(); ?>"><img src="http://lorempixel.com/617/300" alt="" title="" /></a>
        </div>
    </div>
    <div id="travaux">
        <h2>Mes travaux</h2>
        <?php
        $arg = array('post_type' => 'works', 'posts_per_page' => 3);
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
    <div id="dernierPost">
        <h2>
            <?php _e('Les derniers posts'); ?>
        </h2>
        <ul>
            <?php
            $arg1 = array('posts_per_page' => 3, 'post_type' => 'blog');
            $loop = new WP_query($arg1);

            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    ?>
                    <li class="news">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_content($more_link_text, $stripteaser); ?>
                        <footer>
                            <p><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></p>  
                            <p><?php comments_popup_link('Aucun commentaire', '1 commentaire', '% commentaires', 'comments-link', 'Les commentaires sont fermés'); ?></p>
                        </footer>
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
