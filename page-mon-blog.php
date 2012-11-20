<?php
get_header();
?>
<div class="content">
    <p id="blog">
        <?php _e('Retrouvez sur cette page tous ce que je souhaite vous partager'); ?>
    </p>
    <h2 id="blogTitle">
        Blog
    </h2>
    <?php
    $arg = array('post_type' => 'blog', 'posts_per_page' => 12);
    $loop = new WP_query($arg);

    if ($loop->have_posts()):
        while ($loop->have_posts()):
            $loop->the_post();
            ?>
            <article class="blog">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>               
                <?php the_content(); ?>
                <footer>
                    <p>
                        <?php _e('Publié le'); ?> <?php echo get_the_date(); ?>
                    </p>
                    <p>
                        <?php comments_popup_link('Aucun commentaire', '1 commentaire', '% commentaires', 'comments-link', 'Les commentaires sont fermés'); ?>
                    </p>
                </footer>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</div>
<?php
get_footer();
?>
