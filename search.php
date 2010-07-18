<?php get_header(); ?>

<?php if (have_posts()) : ?>

<ul>

<?php while (have_posts()) : the_post(); ?>

<li>
<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink zu <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt(); ?>
</li>

<?php endwhile; ?>

</ul>

<?php else : ?>

<p><p>Keine Einträge gefunden.<p>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
