<?php
get_header();
?>
<div class="content">
    <p id="propos">
        <?php _e('Ce que vous souhaitez savoir sur moi se trouve sur cette page.'); ?>
    </p>
    <h2 class="proposTitle">
        <?php _e('Qui suis je ?'); ?>
    </h2>
    <?php
    $arg = array('post_type' => 'about', 'posts_per_page' => 3);
    $loop = new WP_query($arg);

    if ($loop->have_posts()):
        while ($loop->have_posts()):
            $loop->the_post();
            ?>
            <article class="propos">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <p>
                    <?php the_content(); ?>
                </p>
            </article>
            <?php
        endwhile;
    endif;
    ?>

    <section>
        <h2>
            <?php _e('Mescompétences') ?>
        </h2>

        <table>    
            <tbody>
                <tr>
                    <td>HTML</td><td class="lv5">*****</td>
                </tr>

                <tr>
                    <td>CSS</td><td class="lv5">*****</td>
                </tr>
                <tr>
                    <td>PHP</td><td class="lv4">****</td>
                </tr>
                <tr>
                    <td>JavaScript</td><td class="lv3">***</td>
                </tr>
                <tr>
                    <td>Action Script</td><td class="lv2">**</td>
                    </td>
                <tr>
                    <td>Wordpress </td><td class="lv2">**</td>
                </tr>
                <tr>
                    <td>Drupal</td><td class="lv1">*</td>
                </tr>
                <tr>
                    <td>CodeIgniter</td><td class="lv1">*</td>
                </tr>
            </tbody>
        </table>
    </section>
    <h2 class="proposTitle">
        <?php _e('Me contacter'); ?>
    </h2>
    <section id="contact">
        <p>
            Email : mickael.dusaiwoir@student.hepl.be
        </p>
        <a href="https://www.facebook.com/DusaiwoirMickael" title="Se rendre sur ma page facebook" id="fb"></a>
        <a href="youtube.com" title="Se rendre sur ma chaine youtube" id="yt"></a>
    </section>
</div>
<?php
get_footer();
?>