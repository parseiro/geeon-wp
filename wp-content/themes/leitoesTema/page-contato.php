<?php
// Template Name: Contato
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="prose prose-stone">
		<?php the_content(); ?>
    </article>
<?php endwhile; else: endif; ?>

<?php
$dados    = nl2br( get_post_meta( get_the_ID(), '_data', true ) );
$horarios = nl2br( get_post_meta( get_the_ID(), '_time_table', true ) );
$endereco = nl2br( get_post_meta( get_the_ID(), '_address', true ) );
?>

    <div id="sobre" class="align-center mx-auto flex flex-col max-w-lg border-solid border-gray-300">
        <div class="mb-2">
            <h1 class="whitespace-nowrap font-display text-4xl sm:text-5xl font-bold text-red-500 dark:text-white">
				<?php bloginfo( 'name' ); ?>
            </h1>
            <h2 class="whitespace-nowrap font-display text-2xl sm:text-3xl font-bold text-red-800">
				<?php bloginfo( 'description' ); ?>
            </h2>
        </div>
    </div>
    <div class="flex flex-wrap flex-col sm:flex-row gap-y-5 justify-around">
        <div class="mx-4">
            <h2 class="contato flex items-center whitespace-nowrap text-lg sm:text-xl font-medium leading-relaxed mb-4 font-serif text-stone-700">
                <span class="material-symbols-outlined mr-3"> call </span> Dados
            </h2>
            <p><?php echo $dados; ?></p>
        </div>
        <div class="mx-4">
            <h2 class="contato flex items-center whitespace-nowrap text-lg sm:text-xl font-medium leading-relaxed mb-4 font-serif text-stone-700">
                <span class="material-symbols-outlined mr-3"> schedule </span> Horário
            </h2>
            <p><?php echo $horarios; ?></p>
        </div>
        <div class="mx-4">
            <h2 class="contato flex items-center whitespace-nowrap text-lg sm:text-xl font-medium leading-relaxed mb-4 font-serif text-stone-700">
                <span class="material-symbols-outlined mr-3"> signpost </span> Endereço
            </h2>
            <p><?php echo $endereco; ?></p>
        </div>
    </div>

<?php get_footer(); ?>