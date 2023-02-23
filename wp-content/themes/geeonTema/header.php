<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8"/>
	<?php
	$titulo = wp_title( '-', false, 'right' ) . get_bloginfo( 'name', 'display' );
	?>
    <title><?php echo $titulo; ?></title>
    <meta name="description" content="<?php echo $titulo; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta property="og:title" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>

    <!--  <link rel="manifest" href="site.webmanifest">-->
    <link rel="apple-touch-icon" href="icon.png"/>
    <!-- Place favicon.ico in the root directory -->

    <!--    <link
				rel="stylesheet"
				href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
		/>-->
    <!--    <link rel="stylesheet" href="css/normalize.css" />-->
    <!--    <link rel="stylesheet" href="css/main.css" />-->
    <!--    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css"/>-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet"/>
    <!--<link rel="stylesheet" href="<?php /*echo get_stylesheet_directory_uri(); */ ?>/style.css"/>-->


    <!--<meta name="theme-color" content="#fafafa"/>-->
	<?php wp_head(); ?>
</head>

<body>
<header>
    <nav class="border-gray-200 bg-white px-4 py-2.5 dark:bg-gray-800 lg:px-6">
        <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between">
            <div class="flex items-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconGeeon.svg" class="mr-3 h-6 sm:h-9"
                     alt="GEEON Logo"/>
                <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white">GEEON</span>
            </div>
            <div class="flex items-center lg:order-2">
                <a
                        href="#"
                        class="mr-2 rounded-lg px-4 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800 lg:px-5 lg:py-2.5"
                >
                    Login
                </a>
                <a
                        href="#"
                        class="mr-2 rounded-lg bg-primary-700 px-4 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 lg:px-5 lg:py-2.5"
                >
                    Doar agora
                </a>
                <button
                        data-collapse-toggle="mobile-menu-2"
                        type="button"
                        class="ml-1 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 lg:hidden"
                        aria-controls="mobile-menu-2"
                        aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                        ></path>
                    </svg>
                    <svg class="hidden h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
            </div>
            <div class="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto" id="mobile-menu-2">
				<?php
				add_filter( 'nav_menu_link_attributes', 'nav_menu_link_class', 10, 3 );
				function nav_menu_link_class( $atts, $item, $args ) {
					// check if this item represents the current post
					if ( in_array( 'current-menu-item', $item->classes ) ) {
						// add the desired attributes:
						$atts['aria-current'] = 'page';
						$atts['class']        = 'item-de-menu-ativo';
					} else {
						$atts['class'] = 'item-de-menu';
					}

					return $atts;
				}

				wp_nav_menu(
					[
						'menu'       => 'menu principal',
						'container'  => false,
						'menu_class' => "mt-4 flex flex-col font-medium lg:mt-0 lg:flex-row lg:space-x-8",
						'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					]
				);
				?>
            </div>
        </div>
    </nav>
</header>
