<?php
// Template Name: Contato
?>
<?php get_header(); ?>

	<section class="bg-white dark:bg-gray-900">
		<div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white"><?php the_title(); ?></h2>
	<p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl"><?php the_content(); ?></p>

<?php endwhile; else: endif; ?>
<!--		<form action="#" class="space-y-8">
            <div>
                <label for="email" class="name-input">Your name</label>
                <input type="email" id="email" class="email-input" placeholder="name@flowbite.com" required>
            </div>			<div>
				<label for="email" class="email-input">Your email</label>
				<input type="email" id="email" class="email-input" placeholder="name@flowbite.com" required>
			</div>
			<div>
				<label for="subject" class="assunto-input">Subject</label>
				<input type="text" id="subject" class="subject-input" placeholder="Let us know how we can help you" required>
			</div>
			<div class="sm:col-span-2">
				<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
				<textarea id="message" rows="6" class="message-textarea" placeholder="Leave a comment..."></textarea>
			</div>
			<button type="submit" class="submit-button">Send message</button>
		</form>-->
	</div>
</section>

<?php get_footer(); ?>