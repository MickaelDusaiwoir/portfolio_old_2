<?php
get_header();
?>
<div class="content">
    <div id="post">
        <h2>
            <?php _e('Retrouvez sur cette page tous ce que je souhaite vous partager'); ?>
        </h2>
        <ul>
            <?php
            $arg1 = array('post_type' => 'blog');
            $loop = new WP_query($arg1);

            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    ?>
                    <li class="news" itemscope itemtype="http://schema.org/Article">
                        <h3 itemprop="name"><a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>
                        <div>
                            <p itemprop="dateCreated"><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></p>  
                            <p itemprop="comment"><?php comments_popup_link('Aucun commentaire', '1 commentaire', '% commentaires', 'comments-link', 'Les commentaires sont fermés'); ?></p>
                        </div>
                    </li>
                    <?php
                endwhile;
            endif;
            ?>
        </ul>
    </div> 
    <div id="sidebar">
        <?php dynamic_sidebar('primary'); ?>
    </div>
</div>
<?php
get_footer();
?>
