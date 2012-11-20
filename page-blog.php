<?php
    get_header();
?>
<section id="content">
    <h1>blog</h1>
    <?php 
    
        $arg = array('post_type' => 'blog', 'posts_per_page' => 10);
        $loop = new WP_query($arg);
        
        if($loop->have_posts()):
            while ($loop->have_posts()):
                $loop->the_post();
    ?>
    <article <?php post_class(); ?>>
        <hgroup>
            <h2><?php the_title(); ?></h2>
            <h3><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></h3>
        </hgroup>
        <div class="thumb">
            <?php the_post_thumbnail('thumbnail'); ?>
        </div>
        <div class="post_content">
            <?php the_content(); ?>
        </div>
    </article>
    <?php
            endwhile;
        endif;
    ?>
</section>
<?php
    get_comments();
    get_footer();
?>