<?php
// Template Name: Contato
?>
<?php get_header(); ?>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="px-4 mx-auto max-w-screen-sm text-center lg:px-6 mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Contato</h2>
                <p class="font-light text-gray-600 dark:text-gray-400 sm:text-xl">Nós acreditamos que a comunicação é a base de tudo. Entre em contato da maneira que achar melhor.</p>
            </div>
            <div class="grid grid-cols-1 col-span-1 gap-16 text-center sm:grid-cols-2 lg:grid-cols-3">
                <div class="px-7">
                    <div class="flex justify-center items-center mx-auto mb-4 w-10 h-10 bg-gray-100 rounded-lg dark:bg-gray-800 lg:h-16 lg:w-16">
                        <svg class="w-5 h-5 text-gray-600 lg:w-8 lg:h-8 dark:text-gray-500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Empresa</p>
                    <p class="text-gray-500 dark:text-gray-400">Nome<br>Tipo de empresa</p>
                </div>
                <div class="px-7">
                    <div class="flex justify-center items-center mx-auto mb-4 w-10 h-10 bg-gray-100 rounded-lg dark:bg-gray-800 lg:h-16 lg:w-16">
                        <svg class="w-5 h-5 text-gray-600 lg:w-8 lg:h-8 dark:text-gray-500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Correspondência</p>
                    <p class="text-gray-500 dark:text-gray-400">Rua XYZ, <span class="whitespace-nowrap">CEP 0101010101</span>, <span class="whitespace-nowrap">Fortaleza-CE-Brasil</span></p>
                    <p class="font-semibold text-primary-600 dark:text-primary-500">endereco@dominio.com</p>
                </div>
                <div class="px-7">
                    <div class="flex justify-center items-center mx-auto mb-4 w-10 h-10 bg-gray-100 rounded-lg dark:bg-gray-800 lg:h-16 lg:w-16">
                        <svg class="w-5 h-5 text-gray-600 lg:w-8 lg:h-8 dark:text-gray-500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                    </div>
                    <p class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Telefone</p>
                    <p class="text-gray-500 dark:text-gray-400">Ligue para conversar com um membro do time</p>
                    <p class="font-semibold text-primary-600 dark:text-primary-500">+55 (11) 010101010101</p>
                </div>
            </div>
            <div class="mb-8 lg:mb-0 pt-8 md:pt-24">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>