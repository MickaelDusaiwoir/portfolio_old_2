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
            <?php
            query_posts(array('orderby' => 'rand', 'showposts' => 1, 'post_type' => 'works'));
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(617, 300)); ?></a>
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
                        <footer>
                            <p><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></p>  
                            <p><?php comments_popup_link('Aucun commentaire', '1 commentaire', '% commentaires', 'comments-link', 'Les commentaires sont fermés'); ?></p>
                        </footer>
                    </article>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <div id="contact">
        <?php   
        session_set_cookie_params('10');
        if (isset($_POST['nom']) || isset($_POST['mail']) || isset($_POST['msg'])) {
            
            session_start();
            
            if (isset($_POST['mail'])) {
                $Syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
                if (preg_match($Syntaxe, $_POST['mail'])) {
                    $mail = $_POST['mail'];
                    $_SESSION['erreur']['mail2'] = FALSE;
                    $_SESSION['erreur']['mail1'] = FALSE;
                } else {
                    $_SESSION['erreur']['mail2'] = TRUE;
                }
            } else {
                $_SESSION['erreur']['mail1'] = TRUE;
            }

            if (!empty($_POST['nom'])) {
                $nom = htmlentities($_POST['nom']);
                $_SESSION['erreur']['nom'] = FALSE;
            } else {
                $_SESSION['erreur']['nom'] = TRUE;
            }

            if (!empty($_POST['msg'])) {
                $msg = htmlentities($_POST['msg']);
                $_SESSION['erreur']['msg'] = FALSE;
            } else {
                $_SESSION['erreur']['msg'] = TRUE;
            }

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
                $headers .= 'From: '. $mail . "\r\n";
                mail($destinataire, $sujet, $contenu, $headers);
                $_SESSION['envoyer'] = 'Votre message à bien été envoyé';
            }else{
                $_SESSION['envoyer'] = '';
            }
        }
        ?>
        <h2>
            <?php _e('Me contacter') ?>
        </h2>
        <?php
        if (!empty($_SESSION['envoyer'])) {
            echo('<p id="envoyer">' . $_SESSION['envoyer'] . '</p>');
        }
        ?>
        <form method="post" action="index.php">
            <fieldset>
                <label for="Nom"> 
                    Nom Prénom 
                </label>
                <input type="text" id="nom" placeholder="Introduisez votre nom et prénom" name="nom" <?php if(isset($nom)){ echo 'value="'.$nom.'"'; } ?>/>
                <?php
                if ($_SESSION['erreur']['nom'] == true) {
                    echo('<p class="erreur">Entrez votre Nom et prénom</p>');
                }
                ?>
                <label for="mail">
                    Email
                </label>
                <input type="email" id="mail" placeholder="Introduisez votre email" name="mail" <?php if(isset($nom)){ echo 'value="'.$mail.'"'; } ?>/>
                <?php
                if ($_SESSION['erreur']['mail1'] == true) {
                    echo('<p class="erreur">Entrez votre adresse email</p>');
                } else {
                    if ($_SESSION['erreur']['mail2'] == TRUE) {
                        echo ('<p class="erreur">Entrez une adresse email valide</p>');
                    }
                }
                ?>
                <label for="msg">
                    Message
                </label>

                <textarea id="msg" rows="4" cols="53" placeholder="Que souhaitez vous me dire !!" name="msg"><?php if(isset($nom)){ echo ($msg); } ?></textarea>
                <?php
                if ($_SESSION['erreur']['msg'] == TRUE) {
                    echo('<p class="erreur">Entrez votre message</p>');
                }
                ?>
                <div id="btn">
                    <input type="submit" />
                    <input type="reset" value="Annuler" />                    
                </div>
            </fieldset>
        </form>
        <div id="reseaux">
            <h3><?php _e('Suivez moi sur facebook') ?></h3>
            <a href="https://www.facebook.com/DusaiwoirMickael" title="Page de Mickael Dusaiwoir" Alt="Se rendre sur la page facebook de Mickael Dusaiwoir" id="fb"><span>...</span>Mickael Dusaiwoir</a>
        </div>
    </div>
</div>

<?php
get_footer();
?>
