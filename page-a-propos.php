<?php
get_header();
?>
<div class="content">
    <section id="propos">
        <h2>
            <?php _e('Ce que vous souhaitez savoir sur moi se trouve sur cette page.'); ?>
        </h2>

        <?php
        $arg = array('post_type' => 'about');
        $loop = new WP_query($arg);

        if ($loop->have_posts()):
            while ($loop->have_posts()):
                $loop->the_post();
                ?>
                <section itemscope itemtype="http://schema.org/Article">
                    <h3 itemprop="name">
                        <?php the_title(); ?>
                    </h3>
                    <div itemprop="description">
                    <?php the_content(); ?>                        
                    </div>
                </section>
                <?php
            endwhile;
        endif;
        ?>
    </section>
</div>
<?php
get_footer();
?>