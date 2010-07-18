<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section>
            <article id="post-<?php the_ID(); ?>">
                <header>
                    <h1><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h1>
                    <p>
                        <a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a>
                    </p>
                </header>
                <section>
                    <?php if (!empty($post->post_excerpt)) the_excerpt(); // the caption ?>
                    <?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

                    <nav>
                        <p>
                            <?php previous_image_link(); ?><?php next_image_link(); ?>
                        </p>
                    </nav>
                </section>
                <footer>
                    <?php wp_link_pages(array('before' => '<p><strong>Seiten:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

                    <p>
                        Dieser Artikel wurde pfostiert am <?php the_time('l, F jS, Y'); ?> um <?php the_time(); ?> und ist kategorisiert <?php the_category(', ') ?>. 
                        Du kannst Kommentaren mit Hilfe des Feeds folgen: <?php post_comments_feed_link('RSS 2.0'); ?>

                        <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                            // both comments and pings open ?>
                            Das Hinterlassen von <a href="#respond">Kommentaren</a> und <a href="<?php trackback_url(); ?>" rel="trackback">Trackbacks</a> ist erlaubt und erwünscht.

                        <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                            // only pings are open ?>
                            Kommentare sind geschlossen, <a href="<?php trackback_url(); ?> " rel="trackback">Trackbacks</a> erlaubt.

                        <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                            // comments are open, pings are not ?>
                            Kommentare sind erlaubt, Trackbacks geschlossen.

                        <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                            // neither comments nor pings are open ?>
                            Kommentare und Trackbacks sind geschlossen.

                        <?php } edit_post_link('Diesen Eintrag bearbeiten','','.'); ?>
                    </p>
                </footer>
            </article>
        </section>

        <?php comments_template(); ?>

        <nav>
            <p><?php previous_post_link(); ?><?php next_post_link(); ?></p>
        </nav>

    <?php endwhile; else: ?>

        <section>
            <article>
                <p>Kein Artikel entsprach den gewünschten Kriterien.</p>
            </article>
        </section>

    <?php endif; ?>

<?php get_footer(); ?>
