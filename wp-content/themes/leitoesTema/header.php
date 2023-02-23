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
    <nav className="border-gray-200 bg-white px-4 py-2.5 dark:bg-gray-800 lg:px-6">
        <div className="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between">
            <a href="https://flowbite.com" className="flex items-center">
                <img src="../../../content/images/iconGeeon.svg" className="mr-3 h-6 sm:h-9" alt="GEEON Logo" />
                <span className="self-center whitespace-nowrap text-xl font-semibold dark:text-white">GEEON</span>
            </a>
            <div className="flex items-center lg:order-2">
                <a
                        href="#"
                        className="mr-2 rounded-lg px-4 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800 lg:px-5 lg:py-2.5"
                >
                    Login
                </a>
                <a
                        href="#"
                        className="mr-2 rounded-lg bg-primary-700 px-4 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 lg:px-5 lg:py-2.5"
                >
                    Doar agora
                </a>
                <button
                        data-collapse-toggle="mobile-menu-2"
                        type="button"
                        className="ml-1 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 lg:hidden"
                        aria-controls="mobile-menu-2"
                        aria-expanded="false"
                >
                    <span className="sr-only">Open main menu</span>
                    <svg className="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                                fillRule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clipRule="evenodd"
                        ></path>
                    </svg>
                    <svg className="hidden h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                                fillRule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clipRule="evenodd"
                        ></path>
                    </svg>
                </button>
            </div>
            <div className="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto" id="mobile-menu-2">
                <ul className="mt-4 flex flex-col font-medium lg:mt-0 lg:flex-row lg:space-x-8">
                    <li>
                        <a
                                href="#"
                                className="block border-b border-gray-100 py-2 pr-4 pl-3 text-primary-600 hover:bg-gray-50 dark:border-gray-700 dark:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-primary-500 lg:border-0 lg:p-0 lg:hover:bg-transparent lg:hover:text-primary-600 lg:dark:hover:bg-transparent lg:dark:hover:text-primary-500"
                                aria-current="page"
                        >
                            Home
                        </a>
                    </li>
                    <li>
                        <a
                                href="#"
                                className="block border-b border-gray-100 py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white lg:border-0 lg:p-0 lg:hover:bg-transparent lg:hover:text-primary-600 lg:dark:hover:bg-transparent lg:dark:hover:text-primary-500"
                        >
                            Atendimentos
                        </a>
                    </li>
                    <li>
                        <a
                                href="#"
                                className="block border-b border-gray-100 py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white lg:border-0 lg:p-0 lg:hover:bg-transparent lg:hover:text-primary-600 lg:dark:hover:bg-transparent lg:dark:hover:text-primary-500"
                        >
                            Serviço de apoio
                        </a>
                    </li>
                    <li>
                        <button
                                id="mega-menu-button"
                                data-dropdown-toggle="mega-menu"
                                className="flex w-full items-center justify-between border-b border-gray-100 py-2 pr-4 pl-3 font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white lg:w-auto lg:border-0 lg:p-0 lg:hover:bg-transparent lg:hover:text-primary-600 lg:dark:hover:bg-transparent lg:dark:hover:text-primary-500"
                        >
                            Sobre nós
                            <svg className="ml-1 h-5 w-5 lg:h-4 lg:w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        fillRule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clipRule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <div
                                id="mega-menu"
                                className="absolute z-10 grid hidden w-full border border-gray-100 bg-white shadow-md dark:border-gray-700 dark:bg-gray-700 lg:w-auto lg:grid-cols-3 lg:rounded-lg"
                        >
                            <div className="bg-white p-2 text-gray-900 dark:bg-gray-800 dark:text-white lg:col-span-2 lg:rounded-lg">
                                <ul>
                                    <li>
                                        <a href="#" className="flex items-center rounded-lg p-3 hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <div className="mr-4 rounded-lg bg-white p-2 shadow dark:bg-gray-700">
                                                <svg className="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <div className="font-semibold">Nossa missão</div>
                                                <div className="text-sm font-light text-gray-500 dark:text-gray-400">Trending designs to inspire you</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" className="flex items-center rounded-lg p-3 hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <div className="mr-4 rounded-lg bg-white p-2 shadow dark:bg-gray-700">
                                                <svg className="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fillRule="evenodd"
                                                            d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                            clipRule="evenodd"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <div className="font-semibold">Nossa equipe</div>
                                                <div className="text-sm font-light text-gray-500 dark:text-gray-400">Up-and-coming designers</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" className="flex items-center rounded-lg p-3 hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <div className="mr-4 rounded-lg bg-white p-2 shadow dark:bg-gray-700">
                                                <svg className="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                                    <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <div className="font-semibold">Playoffs</div>
                                                <div className="text-sm font-light text-gray-500 dark:text-gray-400">Work designers are riffing on</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" className="flex items-center rounded-lg p-3 hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <div className="mr-4 rounded-lg bg-white p-2 shadow dark:bg-gray-700">
                                                <svg className="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 3a1 1 0 000 2c5.523 0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z"></path>
                                                    <path d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5 1 1 0 01-1-1zM3 15a2 2 0 114 0 2 2 0 01-4 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <div className="font-semibold">Blog</div>
                                                <div className="text-sm font-light text-gray-500 dark:text-gray-400">Interviews, tutorials, and more</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" className="flex items-center rounded-lg p-3 hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <div className="mr-4 rounded-lg bg-white p-2 shadow dark:bg-gray-700">
                                                <svg className="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fillRule="evenodd"
                                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                            clipRule="evenodd"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <div className="font-semibold">Weekly Warm-up</div>
                                                <div className="text-sm font-light text-gray-500 dark:text-gray-400">Prompt to flex your skills</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div className="bg-gray-50 py-5 px-5 dark:bg-gray-700 lg:col-span-1 lg:rounded-lg">
                                <h3 className="mb-4 text-sm font-semibold text-gray-900 dark:text-white">Browse categories</h3>
                                <ul className="space-y-4 text-sm text-gray-500 dark:text-gray-400">
                                    <li>
                                        <a href="#" className="hover:text-primary-600 dark:hover:text-primary-500">
                                            Animation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" className="hover:text-primary-600 dark:hover:text-primary-500">
                                            Branding
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" className="hover:text-primary-600 dark:hover:text-primary-500">
                                            Illustration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" className="hover:text-primary-600 dark:hover:text-primary-500">
                                            Mobile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" className="hover:text-primary-600 dark:hover:text-primary-500">
                                            Print
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" className="hover:text-primary-600 dark:hover:text-primary-500">
                                            Product Design
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" className="hover:text-primary-600 dark:hover:text-primary-500">
                                            Web Design
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a
                                href="#"
                                className="block border-b border-gray-100 py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white lg:border-0 lg:p-0 lg:hover:bg-transparent lg:hover:text-primary-600 lg:dark:hover:bg-transparent lg:dark:hover:text-primary-500"
                        >
                            Contato
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="flex flex-col flex-nowrap justify-between gap-y-6 mt-6 mx-1  items-center">
    <h1 class="my-4 text-center text-2xl font-serif text-stone-700"><span
                class="border-y-2"><?php the_title(); ?></span></h1>