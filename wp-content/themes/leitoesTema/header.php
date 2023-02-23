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

    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <!--    <link rel="stylesheet" href="css/normalize.css" />-->
    <!--    <link rel="stylesheet" href="css/main.css" />-->
    <!--    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css"/>-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"/>


    <meta name="theme-color" content="#fafafa"/>
	<?php wp_head(); ?>
</head>

<body class="container mx-auto flex max-w-4xl flex-col scroll-smooth border-solid border-gray-100 justify-between">
<header>
    <nav class="rounded border-gray-200 bg-white px-2 py-2.5 dark:bg-gray-900 sm:px-4">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <div class="flex flex-col sm:flex-row sm:items-baseline sm:gap-x-4">
            <span class="whitespace-nowrap font-display text-2xl sm:text-3xl md:text-4xl font-bold text-red-500 dark:text-white">
                <?php bloginfo( 'name' ); ?>
            </span>
                <span class="text-md md:text-lg whitespace-nowrap font-display text-red-800">
              <?php bloginfo( 'description' ); ?>
            </span>
            </div>

            <button
                    data-collapse-toggle="navbar-default"
                    type="button"
                    class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden"
                    aria-controls="navbar-default"
                    aria-expanded="false"
            >
                <span class="sr-only">Open main menu</span>
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
            <div class="hidden w-full sm:block sm:w-auto" id="navbar-default">
				<?php
				$ul_classes = "mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 sm:mt-0 sm:flex-row sm:space-x-8 sm:border-0 sm:bg-white sm:text-sm sm:font-medium sm:dark:bg-gray-900";

				add_filter( 'nav_menu_link_attributes', 'nav_menu_link_class', 10, 3 );
				function nav_menu_link_class( $atts, $item, $args ) {
					$class         = "navbar-item";
					$atts['class'] = $class;

					return $atts;
				}

				wp_nav_menu(
					[
						'menu'       => 'menu principal',
						'container'  => false,
						'menu_class' => $ul_classes,
						'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					]
				);
				?>
            </div>
        </div>
    </nav>
</header>
<main class="flex flex-col flex-nowrap justify-between gap-y-6 mt-6 mx-1  items-center">
    <h1 class="my-4 text-center text-2xl font-serif text-stone-700"><span
                class="border-y-2"><?php the_title(); ?></span></h1>