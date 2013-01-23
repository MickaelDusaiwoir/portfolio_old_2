<h2>
    <?php _e('Commentaires') ?>
</h2>

<?php
$comments_args = array(
    'title_reply' => '',
    'title_reply_to' => '',
    'comment_notes_after' => '',
    'comment_field' => '
    <p class="comment-form-text"><label for="comment">Commentaire </label><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
    'logged_in_as' => ''
);

comment_form($comments_args);
?>

<?php
if (have_comments()) {
    while (have_comments()) {
        the_comment();
        ?>
        <article class="commentaire">
            <p>
                <em>
                    <?php
                    comment_author();
                    ?>
                </em>
                <?php
                _e(' a commenter le ');
                comment_date('j F Y');
                ?>
            </p>
            <?php comment_text(); ?>
        </article>
        <?php
    }
} else {
    ?>
    <p class="no_comment"><?php _e("Il n'y a pas de commentaire"); ?></p>
    <?php
}
?>

