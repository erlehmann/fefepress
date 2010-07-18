<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php setcookie('css', $_GET['css']) ?>

<!DOCTYPE html>

<?php
if ($_GET['css'] != '') {
    $css = $_GET['css'];
} elseif ($_COOKIE['css'] != '') {
    $css = $_COOKIE['css'];
}

if (isset($css)) {
    echo '<link rel=stylesheet type="text/css" href="'. htmlspecialchars($css) .'">';
}
?>

<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>"/>
<?php wp_head(); ?>
<title><?php bloginfo('name'); ?></title>

<h2><a href="/" style="text-decoration: none; color: black;"><?php bloginfo('name'); ?></a></h2>

<b><?php bloginfo('description'); ?></b>

<p align=right>Fragen? <a href="http://blog.fefe.de/faq.html">Antworten!</a><p>
