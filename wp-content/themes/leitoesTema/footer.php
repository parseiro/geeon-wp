<?php wp_footer(); ?>
</main>
<footer class="bg-white dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl p-4 py-6 md:p-8 lg:p-10">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-5">
            <div>
                <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Company</h2>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class=" hover:underline">
                            About
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Careers
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Brand Center
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Blog
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Help center</h2>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Discord Server
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Twitter
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Facebook
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Legal</h2>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Privacy Policy
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Licensing
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Terms
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Company</h2>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class=" hover:underline">
                            About
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Careers
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Brand Center
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Blog
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Download</h2>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            iOS
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Android
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            Windows
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">
                            MacOS
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--<script type="module" src="src/vendor/modernizr-3.11.2.min.js"></script>-->
<!--<script type="module" src="node_modules/flowbite/dist/flowbite.js"></script>-->
<!--<script type="module" src="src/main.js"></script>-->

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<!--  <script>-->
<!--    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;-->
<!--    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')-->
<!--  </script>-->
<!--  <script src="https://www.google-analytics.com/analytics.js" async></script>-->
<!--<script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>-->
<script src="https://cdn.tailwindcss.com"></script>
<script>
    const STATE_DARK = 'dark';
    const STATE_NEUTRAL = 'os';
    const STATE_LIGHT = 'light';

    const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
    const themeToggleBtn = document.getElementById('theme-toggle');


    function reloadDark() {
        let dark = localStorage.theme === STATE_DARK ||
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches);
        if (dark) {
            document.documentElement.classList.add('dark');
            themeToggleDarkIcon.classList.add('hidden')
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            themeToggleDarkIcon.classList.remove('hidden')
            themeToggleLightIcon.classList.add('hidden');
        }
    }

    reloadDark();

    function setTheme(theme) {
        // Whenever the user explicitly chooses light mode
        if (theme === STATE_DARK || theme === STATE_LIGHT) localStorage.theme = theme;
        else if (theme === STATE_NEUTRAL) delete localStorage.theme;
    }

    themeToggleBtn.addEventListener('click', () => {
        /*        let state;
				if (!('theme' in localStorage)) setTheme(STATE_NEUTRAL);*/
        // else
        const currentState = localStorage.theme ?? STATE_NEUTRAL;
        let nextState;
        switch (currentState) {
            case STATE_NEUTRAL:
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) nextState = STATE_LIGHT;
                else nextState = STATE_DARK;
                break;
            case STATE_DARK:
                nextState = STATE_LIGHT;
                break;
            case STATE_LIGHT:
                nextState = STATE_NEUTRAL;
                break;
        }
        if (nextState) {
            setTheme(nextState);
            reloadDark();
        }
    });

    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    primary: {
                        50: '#FFC9E5',
                        100: '#FFB4DB',
                        200: '#FF8BC7',
                        300: '#FF63B3',
                        400: '#FF3AA0',
                        500: '#FF118C',
                        600: '#D80070',
                        700: '#A00053',
                        800: '#680036',
                        900: '#300019',
                    },
                },
            },
        },
        // plugins: [require('flowbite/plugin')],
    };


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>
