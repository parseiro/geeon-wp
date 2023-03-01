<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body <?php body_class( 'antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen mx-auto max-w-screen-xl bg-rose-background bg-opacity-15">

	<?php do_action( 'tailpress_header' ); ?>

    <header>
        <!-- Primeiro header -->
        <nav class="mx-auto flex h-16 flex-nowrap items-center justify-between bg-rose-background2 bg-opacity-50 px-4 py-0 shadow-lg md:px-6">
            <div class="hidden gap-x-3 md:block md:flex md:items-center md:justify-between md:gap-x-6">
                <a
                        href="#"
                        aria-label="Instagram"
                        class="flex items-center justify-center"
                ><img
                            class="drop-shadow-sm hover:transition-all"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram.svg"
                            alt="instagram-icon"
                    /></a>
                <a
                        href="#"
                        aria-label="Facebook"
                        class="flex items-center justify-center"
                ><img
                            class="drop-shadow-sm hover:transition-all"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.svg"
                            alt="facebook-icon"
                    /></a>
                <a
                        href="#"
                        aria-label="Youtube"
                        class="flex items-center justify-center"
                ><img
                            class="drop-shadow-sm hover:transition-all"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/youtube.svg"
                            alt="youtube-icon"
                    /></a>
            </div>
            <div class="flex items-center justify-between">
                <button
                        data-collapse-toggle="navbar-default"
                        aria-controls="navbar-default"
                        aria-expanded="false"
                        type="button"
                        class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden"
                >
                    <span class="sr-only">Abrir menu principal</span>
                    <svg
                            class="h-6 w-6"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
					<?php
					wp_nav_menu(
						[
							'menu'       => 'Header Superior',
							'container'  => false,
							'menu_class' => "mt-4 hidden p-4 text-xl md:mt-0 md:flex md:flex-row md:items-center md:justify-center md:gap-x-8 md:border-0",
						]
					);
					?>
                </div>
            </div>
        </nav>
        <!-- Segundo header -->
        <div
                class="mx-auto flex h-24 max-w-screen-xl flex-nowrap items-center justify-between px-4 py-2.5 shadow md:px-6"
        >
            <figure
                    id="logo-container"
                    class="mr-3 flex h-[5rem] w-[10rem] items-center justify-around"
            >
                <a href="/">
                    <img
                            class="w-full object-cover"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"
                            alt="Logo do Geeon"
                    />
                </a>
            </figure>

            <div id="navbar-inferior" class="flex items-center justify-between">
	            <?php
	            wp_nav_menu(
		            [
			            'menu'       => 'Header Inferior',
			            'container'  => false,
			            'menu_class' => "mt-4 hidden p-4 text-xl md:mt-0 md:flex md:flex-row md:items-center md:justify-center md:gap-x-8 md:border-0",
		            ]
	            );
	            ?>
                <button
                        id="btn-donation"
                        class="ml-[3rem] h-[3.125rem] w-[9.375rem] rounded-lg border border-solid border-rose-default bg-rose-strong text-2xl font-bold text-white hover:cursor-pointer hover:bg-white hover:text-rose-default hover:transition-all"
                        type="button"
                >
                    DOAR
                </button>
            </div>
        </div>
    </header>

    <div id="content" class="site-content flex-grow">

        <?php if ( is_front_page() ) { ?>
            <!-- Start introduction -->
            <section class="h-[325px] bg-rose-background2 bg-opacity-50"></section>
            <section class="h-[450px]"></section>
            <section class="h-[375px]"></section>
            <!-- End introduction -->
	    <?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

        <main>
