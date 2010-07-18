<?php get_header(); ?>

<?php if (have_posts()) : ?>

<ul>
<?php while (have_posts()) : the_post(); ?>

<li id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink zu <?php the_title_attribute(); ?>">[l]</a>
<?php the_content('Kostenlose Vollversion …'); ?>
<?php edit_post_link('Artikel bearbeiten', ' ', ''); ?>
</li>

<?php endwhile; ?>
</ul>

<?php else : ?>

<p><p>Keine Einträge gefunden.<p>

<?php endif; ?>

<?php get_footer(); ?>
