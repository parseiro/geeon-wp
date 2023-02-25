
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-white dark:bg-gray-800" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

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
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>
<script>
    const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });
</script>

<?php wp_footer(); ?>
</body>
</html>
