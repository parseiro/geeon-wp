<?php get_header(); ?>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article
                        class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
					<?php if ( ! is_front_page() ) { ?>
                        <header class="mb-4 lg:mb-6 not-format">
                            <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white"><?php the_title(); ?></h1>
                        </header>
					<?php } ?>
					<?php the_content(); ?>
                </article>

			<?php endwhile; else: ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

			<?php endif; ?>

        </div>
    </main>

<?php get_footer(); ?>