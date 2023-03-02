<?php get_header(); ?>

<?php if ( is_front_page() ) { ?>
    <!-- Start introduction -->
    <section
            class="secao h-[325px] w-full bg-rose-background2 bg-opacity-50"
    ></section>
    <section id="missao" class="secao ">
        <article class="margenzinha flex flex-col items-center justify-between">
            <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-icon.png"
                    alt="Logo da Geeon"
                    class="not-format"
            />
            <div class="flex flex-col items-center formatar margenzinha">
                <h2>Nossa Missão</h2>
                <p>
                    Foco na prevenção e diagnóstico precoce do câncer de mama, atuar
                    junto à sociedade acadêmica, científica, profissionais de saúde
                    e usuários do SUS e melhorar a qualidade de vida da população.
                </p>
            </div>
        </article>
    </section>
    <section class="secao h-[375px] w-full bg-rose-smooth bg-opacity-20">
        <div class="formatar">
            <h2>Números</h2>
        </div>
    </section>
    <section id="servicos_medicos" class="secao margenzinha">
        <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-icon.png"
                alt="Logo da Geeon"
                class="not-format"
        />
        <div class="formatar">
            <h2>Serviços Médicos do Geeon</h2>
        </div>
        <article
                class="flex w-full items-center justify-center text-rose-default"
        >
            <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/mamografia.png"
                    alt="imagem sobre exames de mamografia"
                    class="not-format"
            />
            <div class="formatar flex flex-col md:items-start">
                <h3>Mamografia</h3>
                <p>
                    A mamografia é um exame radiológico feito nas mamas. Possui alta
                    resolução e fornece imagens detalhadas capazes de identificar
                    precocemente o câncer de mama, antes mesmo que a mulher tenha
                    sintomas. Estima-se que de 1 a cada 10 mulheres desenvolvem o
                    câncer de mama em algum momento da vida. No ano de 2022 foram
                    realizadas 8.768 mamografias
                </p>
            </div>
        </article>
        <article class="margenzinha flex w-full items-center justify-center">
            <div class="formatar flex flex-col md:items-end md:text-right">
                <h3>Consulta com mastologista</h3>
                <p>
                    A mastologia é a especialidade médica que cuida das glândulas
                    mamárias. Portanto, tudo o que for relacionado com as mamas é
                    tratado pelo médico mastologista. Isso inclui quaisquer condições
                    que possam afetar os seios, como dores, inchaços, infecções e,
                    claro, o câncer. No ano de 2022 foram realizadas 7.091 consultas
                </p>
            </div>
            <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/mastologista.png"
                    alt="imagem sobre consulta com mastologista"
            />
        </article>
        <article class="margenzinha flex w-full items-center justify-center">
            <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/biopsia.png"
                    alt="imagem sobre biópsia"
                    class="not-format"
            />
            <div class="formatar flex flex-col md:items-start">
                <h3>Biópsia</h3>
                <p>
                    A biópsia é um exame que consiste na retirada de um fragmento de
                    uma parte do corpo (biópsia incisional) ou mesmo de um órgão ou
                    lesão como um todo (biópsia excisional). No ano de 2022 foram
                    realizadas 908 Biópsia e punções
                </p>
            </div>
        </article>
        <article class="margenzinha flex w-full items-center justify-center">
            <div class="formatar flex flex-col md:items-end md:text-right">
                <h3>Ultrassonografia de mamas</h3>
                <p>
                    A ultrassonografia ou ecografia é um método diagnóstico muito
                    recorrente na medicina moderna que utiliza o eco gerado através de
                    ondas ultrassônicas de alta frequência para visualizar, em tempo
                    real. No ano de 2022 foram realizadas 775 Ultrassonografias
                    Mamárias
                </p>
            </div>
            <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/us-mamas.png"
                    alt="imagem sobre ultrasson mamárias"
                    class="not-format"
            />
        </article>
    </section>
    <section class="secao h-[375px] bg-rose-smooth bg-opacity-20">
        <div class="formatar">
            <h2>Diagnósticos positivos</h2>
        </div>
    </section>
    <section class="secao h-[375px]">
        <div class="formatar">
            <h2>Sino da vitória</h2>
        </div>
    </section>
    <section class="secao bg-black">
        <div class="formatar">
            <h2>Notícias</h2>
        </div>
        <div id="indicators-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div
                        class="hidden duration-700 ease-in-out"
                        data-carousel-item="active"
                >
                    <!--                <img
													  src="/docs/images/carousel/carousel-1.svg"
													  class="absolute top-1/2 left-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
													  alt="..."
													/>-->
                    <img
                            class="absolute top-1/2 left-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png"
                            alt="geeon-logo"
                    />
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png"
                            class="absolute top-1/2 left-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                            alt="..."
                    />
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png"
                            class="absolute top-1/2 left-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                            alt="..."
                    />
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png"
                            class="absolute top-1/2 left-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                            alt="..."
                    />
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png"
                            class="absolute top-1/2 left-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                            alt="..."
                    />
                </div>
            </div>
            <!-- Slider indicators -->
            <div
                    class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3"
            >
                <button
                        type="button"
                        class="h-3 w-3 rounded-full"
                        aria-current="true"
                        aria-label="Slide 1"
                        data-carousel-slide-to="0"
                ></button>
                <button
                        type="button"
                        class="h-3 w-3 rounded-full"
                        aria-current="false"
                        aria-label="Slide 2"
                        data-carousel-slide-to="1"
                ></button>
                <button
                        type="button"
                        class="h-3 w-3 rounded-full"
                        aria-current="false"
                        aria-label="Slide 3"
                        data-carousel-slide-to="2"
                ></button>
                <button
                        type="button"
                        class="h-3 w-3 rounded-full"
                        aria-current="false"
                        aria-label="Slide 4"
                        data-carousel-slide-to="3"
                ></button>
                <button
                        type="button"
                        class="h-3 w-3 rounded-full"
                        aria-current="false"
                        aria-label="Slide 5"
                        data-carousel-slide-to="4"
                ></button>
            </div>
            <!-- Slider controls -->
            <button
                    type="button"
                    class="group absolute top-0 left-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                    data-carousel-prev
            >
            <span
                    class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 sm:h-10 sm:w-10"
            >
              <svg
                      aria-hidden="true"
                      class="h-5 w-5 text-white dark:text-gray-800 sm:h-6 sm:w-6"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
              >
                <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 19l-7-7 7-7"
                ></path>
              </svg>
              <span class="sr-only">Previous</span>
            </span>
            </button>
            <button
                    type="button"
                    class="group absolute top-0 right-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                    data-carousel-next
            >
            <span
                    class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 sm:h-10 sm:w-10"
            >
              <svg
                      aria-hidden="true"
                      class="h-5 w-5 text-white dark:text-gray-800 sm:h-6 sm:w-6"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
              >
                <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 5l7 7-7 7"
                ></path>
              </svg>
              <span class="sr-only">Next</span>
            </span>
            </button>
        </div>
    </section>
    <!-- End introduction -->
<?php } ?>


<?php get_footer(); ?>

