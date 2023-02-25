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

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header>
        <nav class="border-gray-200 bg-white px-4 py-2.5 dark:bg-gray-800 lg:px-6">
            <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between">
                <div class="flex items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconGeeon.svg" class="mr-3 h-6 sm:h-9"
                         alt="GEEON Logo"/>
                    <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white">GEEON</span>
                </div>
                <div class="flex items-center lg:order-2">
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>
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

	<div id="content" class="site-content flex-grow">

		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->
            <section class="bg-white dark:bg-gray-900">
                <div class="mx-auto max-w-screen-xl py-8 px-4 sm:py-16 lg:px-6">
                    <div class="max-w-screen-md">
                        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                            Venha conhecer um pouco mais do que nos une
                        </h2>
                        <p class="mb-8 font-light text-gray-500 dark:text-gray-400 sm:text-xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim
                            nec dui nunc mattis enim ut tellus elementum sagittis. Platea dictumst quisque sagittis purus. Elementum tempus egestas sed sed.
                            Sem integer vitae justo eget magna. Vitae et leo duis ut. Lacus sed viverra tellus in hac. Aliquet enim tortor at auctor urna
                            nunc id cursus. Tincidunt praesent semper feugiat nibh sed pulvinar proin gravida. Sed nisi lacus sed viverra tellus in hac
                            habitasse platea. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Fames ac turpis egestas maecenas. Nullam
                            ac tortor vitae purus faucibus ornare suspendisse. Sed sed risus pretium quam vulputate dignissim suspendisse in. Sem nulla
                            pharetra diam sit amet nisl suscipit adipiscing bibendum. Enim praesent elementum facilisis leo vel fringilla est. Ante in nibh
                            mauris cursus mattis. Non nisi est sit amet facilisis magna etiam. Nec nam aliquam sem et. Elementum integer enim neque volutpat
                            ac tincidunt vitae semper quis.
                        </p>
                        <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                            <a
                                    href="#"
                                    class="inline-flex items-center justify-center rounded-lg bg-primary-700 px-4 py-2.5 text-center text-base font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900"
                            >
                                Doar agora
                            </a>
                            <a
                                    href="#"
                                    class="inline-flex items-center justify-center rounded-lg border border-gray-300 px-4 py-2.5 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            >
                                Saber mais
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-white dark:bg-gray-900">
                <div class="mx-auto max-w-screen-xl py-8 px-4 text-center lg:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm">
                        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Depoimentos</h2>
                        <p class="mb-8 font-light text-gray-500 dark:text-gray-400 sm:text-xl lg:mb-16">
                            Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind
                        </p>
                    </div>
                    <div class="mb-8 grid lg:mb-12 lg:grid-cols-2">
                        <figure class="flex flex-col items-center justify-center border-b border-gray-200 bg-gray-50 p-8 text-center dark:border-gray-700 dark:bg-gray-800 md:p-12 lg:border-r">
                            <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Speechless with how easy this was to integrate</h3>
                                <p class="my-4">
                                    I recently got my hands on Flowbite Pro, and holy crap, I am speechless with how easy this was to integrate within my
                                    application. Most templates are a pain, code is scattered, and near impossible to theme.
                                </p>
                                <p class="my-4">
                                    Flowbite has code in one place and I am not joking when I say it took me a matter of minutes to copy the code, customise
                                    it and integrate within a Laravel + Vue application.
                                </p>
                                <p class="my-4">If you care for your time, I hands down would go with this.</p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center space-x-3">
                                <img
                                        class="h-9 w-9 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                        alt="profile picture"
                                />
                                <div class="space-y-0.5 text-left font-medium dark:text-white">
                                    <div>Bonnie Green</div>
                                    <div class="text-sm font-light text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                                </div>
                            </figcaption>
                        </figure>
                        <figure class="flex flex-col items-center justify-center border-b border-gray-200 bg-gray-50 p-8 text-center dark:border-gray-700 dark:bg-gray-800 md:p-12">
                            <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                                <p class="my-4">
                                    FlowBite provides a robust set of design tokens and components based on the popular Tailwind CSS framework. From the most
                                    used UI components like forms and navigation bars to the whole app screens designed both for desktop and mobile, this UI
                                    kit provides a solid foundation for any project.
                                </p>
                                <p class="my-4">
                                    Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!
                                </p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center space-x-3">
                                <img
                                        class="h-9 w-9 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                                        alt="profile picture"
                                />
                                <div class="space-y-0.5 text-left font-medium dark:text-white">
                                    <div>Roberta Casas</div>
                                    <div class="text-sm font-light text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                                </div>
                            </figcaption>
                        </figure>
                        <figure class="flex flex-col items-center justify-center border-b border-gray-200 bg-gray-50 p-8 text-center dark:border-gray-700 dark:bg-gray-800 md:p-12 lg:border-b-0 lg:border-r">
                            <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow and variants</h3>
                                <p class="my-4">
                                    As someone who mainly designs in the browser, I have been a casual user of Figma, but as soon as I saw and started playing
                                    with FlowBite my mind was 🤯.
                                </p>
                                <p class="my-4">
                                    Everything is so well structured and simple to use (I have learnt so much about Figma by just using the toolkit).
                                </p>
                                <p class="my-4">
                                    Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application.
                                </p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center space-x-3">
                                <img
                                        class="h-9 w-9 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                        alt="profile picture"
                                />
                                <div class="space-y-0.5 text-left font-medium dark:text-white">
                                    <div>Jese Leos</div>
                                    <div class="text-sm font-light text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                                </div>
                            </figcaption>
                        </figure>
                        <figure class="flex flex-col items-center justify-center border-gray-200 bg-gray-50 p-8 text-center dark:border-gray-700 dark:bg-gray-800 md:p-12">
                            <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                                <p class="my-4">
                                    This is a very complex and beautiful set of elements. Under the hood it comes with the best things from 2 different
                                    worlds: Figma and Tailwind.
                                </p>
                                <p class="my-4">You have many examples that can be used to create a fast prototype for your team.</p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center space-x-3">
                                <img
                                        class="h-9 w-9 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                                        alt="profile picture"
                                />
                                <div class="space-y-0.5 text-left font-medium dark:text-white">
                                    <div>Joseph McFall</div>
                                    <div class="text-sm font-light text-gray-500 dark:text-gray-400">CTO at Google</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="text-center">
                        <a
                                href="#"
                                class="mr-2 mb-2 rounded-lg border border-gray-200 bg-white py-2.5 px-5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                        >
                            Show more...
                        </a>
                    </div>
                </div>
            </section>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
