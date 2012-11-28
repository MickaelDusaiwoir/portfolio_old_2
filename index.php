<?php
// formulaire

$envoyer = FALSE;
$erreur[] = FALSE;

if (!empty($_POST['submit'])) {
    if (!empty($_POST['nom'])) {
        $nom = htmlentities($_POST['nom']);
        $erreur['nom'] = FALSE;
    } else {
        $erreur['nom'] = TRUE;
    }

    if (!empty($_POST['mail'])) {
        $Syntaxe = "/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)" .
                "|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}" .
                "|[0-9]{1,3})(\]?)$/";
        if (preg_match($Syntaxe, $_POST['mail'])) {
            $mail = $_POST['mail'];
            $erreur['mail1'] = FALSE;
            $erreur['mail2'] = FALSE;
        } else {
            $erreur['mail2'] = TRUE;
        }
    } else {
        $erreur['mail1'] = TRUE;
    }

    if (!empty($_POST['msg'])) {
        $msg = htmlentities($_POST['msg']);
        $erreur['msg'] = FALSE;
    } else {
        $erreur['msg'] = TRUE;
    }
}

// fonction mail

if (!empty($nom) && !empty($mail) && !empty($msg)) {
    $destinataire = 'mickael.dusaiwoir@student.hepl.be';
    $sujet = 'Titre du message';
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: ' . $nom . '</p>';
    $contenu .= '<p><strong>Email</strong>: ' . $mail . '</p>';
    $contenu .= '<p><strong>Message</strong>: ' . $msg . '</p>';
    $contenu .= '</body></html>';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: ' . $mail . "\r\n";
    mail($destinataire, $sujet, $contenu, $headers);
    $envoyer = TRUE;
} else {
    $envoyer = FALSE;
}

// headers
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
                    <?php the_content(); ?>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <div id="tvxHasard">
            <?php
            query_posts(array('orderby' => 'rand', 'showposts' => 1, 'post_type' => 'works'));
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(619, 314)); ?></a>
                    <?php
                endwhile;
            endif;
            ?>
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

        <div>
            <?php
            $arg1 = array('posts_per_page' => 3, 'post_type' => 'blog');
            $loop = new WP_query($arg1);

            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    ?>
                    <article>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_content($more_link_text, $stripteaser); ?>
                        <div>
                            <p><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></p>  
                            <p><?php comments_popup_link('Aucun commentaire', '1 commentaire', '% commentaires', 'comments-link', 'Les commentaires sont fermés'); ?></p>
                        </div>
                    </article>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <footer>
        <div id="contact">
            <h2>
                <?php _e('Me contacter') ?>
            </h2>
            <?php if ($envoyer == TRUE) : ?>
                <p id="envoyer">Votre message &agrave; bien &eacute;t&eacute; envoy&eacute</p>
            <?php endif; ?>
            <form method="post" action="index.php#formulaire">
                <a name="formulaire"></a>
                <fieldset>
                    <label for="Nom"> 
                        Nom Prénom 
                    </label>
                    <input type="text" id="nom" placeholder="Introduisez votre nom et prénom" name="nom" <?php
            if (isset($nom)) {
                echo('value="' . $nom . '"');
            }
            ?>/>
                           <?php if ($erreur['nom'] == TRUE): ?>
                        <p class="erreur">Entrez votre Nom et pr&eacute;nom</p>
                    <?php endif; ?>
                    <label for="mail">
                        Email
                    </label>
                    <input type="email" id="mail" placeholder="Introduisez votre email" name="mail" <?php
                    if (isset($mail)) {
                        echo 'value="' . $mail . '"';
                    }
                    ?>/>
                           <?php
                           if ($erreur['mail1'] == TRUE || $erreur['mail2']) :
                               if ($erreur['mail2'] == TRUE) :
                                   ?>
                            <p class="erreur">Entrez une adresse email valide</p>
                        <?php else : ?>
                            <p class="erreur">Entrez votre adresse email</p>
                        <?php
                        endif;
                    endif;
                    ?>
                    <label for="msg">
                        Message
                    </label>

                    <textarea id="msg" rows="4" cols="53" placeholder="Que souhaitez vous me dire !!" name="msg"><?php
                    if (isset($msg)) {
                        echo ($msg);
                    }
                    ?></textarea>
                    <?php if ($erreur['msg'] == TRUE): ?>
                        <p class="erreur">Entrez votre message</p>
                    <?php endif; ?>
                    <input type="submit" name="submit" id="envoyer" />    
                </fieldset>
            </form>
            <div id="reseaux">
                <h3><?php _e('Suivez moi sur facebook') ?></h3>
                <a href="https://www.facebook.com/DusaiwoirMickael" title="Page de Mickael Dusaiwoir" Alt="Se rendre sur la page facebook de Mickael Dusaiwoir" id="fb"><span>...</span>Mickael Dusaiwoir</a>

                <div id="mc_embed_signup">
                    <h3>Inscrivez vous à la newsletter</h3>
                    <form action="http://magic-of-design.us6.list-manage.com/subscribe/post?u=9a6af94c92a351b99d19455c6&amp;id=b3b5b9430f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Email</label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Indiquez votre adresse mail">
                        </div>
                        <input type="submit" value="S'abonner" name="subscribe" id="mc-embedded-subscribe" class="button">
                    </form>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php
get_footer();
?>
