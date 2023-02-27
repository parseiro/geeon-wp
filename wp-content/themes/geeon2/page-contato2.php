<?php
// Template Name: Contato Promo
?>
<?php get_header(); ?>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="px-4 mx-auto max-w-screen-sm text-center lg:px-6 mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Faça parte</h2>
                <p class="font-light text-gray-600 dark:text-gray-400 sm:text-xl">Venha conosco nessa aventura</p>
            </div>
            <div class="mb-8 lg:mb-0 pt-8 md:pt-24">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: endif; ?>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('wpcf7mailsent', function (event) {
            const thankyouURL = document.getElementById("thankyouURL").value;
            if (thankyouURL) location = thankyouURL;
        }, false);
    </script>

<?php get_footer(); ?>