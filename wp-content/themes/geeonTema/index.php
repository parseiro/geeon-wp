<?php get_header(); ?>
<main>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="prose prose-stone">
		<?php the_content(); ?>
    </article>
<?php endwhile; else: ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


</main>
<?php get_footer(); ?>