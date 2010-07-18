<?php // Do not delete these lines
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Diese Seite direkt zu laden ist verboten. Anzeige ist raus.');
    if (!empty($post->post_password)) {
        if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
            <p class="nocomments">Dieser Pfosten ist passwortgeschützt. Identifizieren Sie sich!</p>
            <?php return;
        }
    }
?>
