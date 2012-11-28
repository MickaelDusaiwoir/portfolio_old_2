<?php
get_header();
?>
<div class="content">
    <div id="propos">
        <h2>
            <?php _e('Ce que vous souhaitez savoir sur moi se trouve sur cette page.'); ?>
        </h2>

        <section>
            <h3>
                <?php _e('Mescompétences') ?>
            </h3>

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

        <section id="contact">
            <h3 class="proposTitle">
                <?php _e('Me contacter'); ?>
            </h3>
            <p>
                Email : mickael.dusaiwoir@student.hepl.be
            </p>
            <a href="https://www.facebook.com/DusaiwoirMickael" title="Se rendre sur ma page facebook" id="fb"></a>
            <a href="youtube.com" title="Se rendre sur ma chaine youtube" id="yt"></a>
        </section>
    </div>
</div>
<?php
get_footer();
?>