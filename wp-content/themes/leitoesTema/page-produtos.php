<?php
// Template Name: Produtos
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="prose prose-stone">
		<?php the_content(); ?>
    </article>
<?php endwhile; else: endif; ?>
    <div id="produtos" class="flex flex-wrap justify-around gap-y-5">
        <div class="imgcarne">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/prime_ribs.jpg" alt="Prime ribs tomahawk"/>

            <p class="text-center">Prime Rib Tomahawk</p>
        </div>

        <!--      <div class="imgcarne texto color-g8 t-size-20 p-20 d-flex">
		  <blockquote>"O melhor restaurante é a nossa casa."</blockquote>
		</div>-->

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/t_bone_angus.jpg" alt="T Bone Angus"/>
            </div>
            <div class="text-align-center">T Bone Angus</div>
        </div>

        <!--      <div class="imgcarne texto color-g8 t-size-20 p-20 d-flex">
		  <blockquote>Temos cortes uruguaios e argentinos.</blockquote>
		</div>-->

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ancho_angus.jpg" alt="Ancho"/>
            </div>
            <div class="text-align-center">Ancho Angus Uruguaio</div>
        </div>

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linguicas.jpg" alt="Linguiças"/>
            </div>
            <div class="text-align-center">Linguiças especiais</div>
        </div>

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/avestruz.jpg" alt="Avestruz"/>
            </div>
            <div class="text-align-center">Cortes de Avestruz</div>
        </div>

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cabrito.jpg" alt="Cabrito"/>
            </div>
            <div class="text-align-center">Cortes de Cabrito</div>
        </div>

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/carne codorna2.jpg" alt="Codornas"/>
            </div>
            <div class="text-align-center">Codornas Europeias</div>
        </div>

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/coelho.jpg" alt="Coelho"/>
            </div>
            <div class="text-align-center">Coelho (inteiro ou partes)</div>
        </div>

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ra.jpg" alt="Rã"/>
            </div>
            <div class="text-align-center">Rã</div>
        </div>

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/javali.jpg" alt="Picanha de Javali"/>
            </div>
            <div class="text-align-center">Picanha de Javali</div>
        </div>

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jacaré.jpg" alt="Jacaré"/>
            </div>
            <div class="text-align-center">Cortes de Jacaré</div>
        </div>

        <div class="imgcarne">
            <div class="imgcontainer">
                <img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/pato.webp"
                        alt="Filé do Peito de Pato"
                />
            </div>
            <div class="text-align-center">Filé do peito de pato</div>
        </div>

        <div class="imgcarne">
            <div class="imgcontainer">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/leitao.jpg" alt="Leitão"/>
            </div>
            <div class="text-align-center">Leitão inteiro</div>
        </div>
    </div>

<?php get_footer(); ?>