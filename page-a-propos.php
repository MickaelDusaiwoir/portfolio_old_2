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
                <section>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php the_content(); ?>
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