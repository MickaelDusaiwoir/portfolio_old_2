<?php
get_header();
?>
<div id="content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <article <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
                <h2 itemprop="name"><?php the_title(); ?></h2>
                <div class="post_content" itemprop="description">
                    <?php the_content(); ?>
                </div>
                <p id="date" itemprop="dateCreated"><?php _e('Publié le '); echo get_the_date(); ?> <?php _e(' par '); echo get_the_author(); ?> - <?php comments_popup_link('Aucun commentaire', '1 commentaire', '% commentaires', 'comments-link', 'Les commentaires sont fermés'); ?></p>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</div>
<section id="commentaire">
    <?php comments_template(); ?>
    <?php get_comments(); ?> 
</section>

