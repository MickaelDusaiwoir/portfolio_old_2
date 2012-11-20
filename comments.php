<h2>
    <?php _e('Commentaires') ?>
</h2>

<?php
if (have_comments()) {
    while (have_comments()) {
        the_comment();
        ?>
        <article>
            <?php comment_text(); ?>
            <div>
                <p>
                    <?php
                    _e('Posté le ');
                    comment_date('j F Y');
                    _e(' par ');
                    comment_author();
                    ?>
                </p>
            </div>
        </article>
        <?php
    }
} else {
    ?>
    <p><?php _e("Il n'y a pas de commentaire"); ?></p>
    <?php
}
?>

<?php
$comments_args = array(
    'title_reply' => '',
    'title_reply_to' => '',
    'comment_notes_after' => '',
    'comment_field' => '
    <label for="comment">Commentaire </label><textarea id="comment" name="comment" aria-required="true"></textarea>',
    'logged_in_as'=>'' 
    );

comment_form($comments_args);
?>
