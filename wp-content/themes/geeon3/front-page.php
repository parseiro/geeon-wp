<?php get_header(); ?>

<?php if ( is_front_page() ) { ?>
    <!-- Start introduction -->
    <div
            class="flex flex-col items-center gap-y-10 bg-rose-background2 bg-opacity-50"
    >
        <section id="missao" class="secao">
            <article class="flex flex-col items-center justify-center">
                <img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/outubro rosa.png"
                        alt="Logo da Geeon"
                        class="not-format"
                />
                <div>
                    <h2 class="text-rose-default">Nossa Missão</h2>
                </div>
                <div>
                    <p>
                        Foco na prevenção e diagnóstico precoce do câncer de mama, atuar
                        junto à sociedade acadêmica, científica, profissionais de saúde
                        e usuários do SUS e melhorar a qualidade de vida da população.
                    </p>
                </div>
            </article>
        </section>

    </div>
    <div class="flex flex-col items-center gap-y-10 bg-rose-smooth bg-opacity-50">
        <section id="servicos_medicos" class="secao">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/outubro rosa.png"
                 alt="Logo da Geeon"
                 class="not-format"/>
            <div>
                <h2 class="text-rose-default">Serviços Médicos do Geeon</h2>
            </div>
            <article class="flex items-center justify-center">
                <img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/mamografia.png"
                        alt="imagem sobre exames de mamografia"
                        class="not-format"
                />
                <div>
                    <h3 class="text-rose-default">Mamografia</h3>
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
            <article class="flex items-center justify-center">
                <div class="md:text-right">
                    <h3 class="text-rose-default">Consulta com mastologista</h3>
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
            <article class="flex items-center justify-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/biopsia.png"
                     alt="imagem sobre biópsia"
                     class="not-format"
                />
                <div>
                    <h3 class="text-rose-default">Biópsia</h3>
                    <p>
                        A biópsia é um exame que consiste na retirada de um fragmento de
                        uma parte do corpo (biópsia incisional) ou mesmo de um órgão ou
                        lesão como um todo (biópsia excisional). No ano de 2022 foram
                        realizadas 908 Biópsia e punções
                    </p>
                </div>
            </article>
            <article class="flex items-center justify-center">
                <div class="md:text-right">
                    <h3 class="text-rose-default">Ecografia de mamas</h3>
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
    </div>
    <!-- End introduction -->
<?php } ?>


<?php get_footer(); ?>

