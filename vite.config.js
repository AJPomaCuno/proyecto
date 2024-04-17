import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
            'resources/css/all.min.css',
            'resources/css/animate.css',
            'resources/css/animated-text.css',
            'resources/css/bootstrap.icons.css',
            'resources/css/bootstrap.min.css',
            'resources/css/flaticon.css',
            'resources/css/meanmenu.min.css',
            'resources/css/owl.carousel.min.css',
            'resources/css/owl.transitions.css',
            'resources/css/responsive.css',
            'resources/css/theme-default.css',
            
            'resources/js/app.js',
            'resources/js/ajax-mail.js',
            'resources/js/animated-text.js',
            'resources/js/bootstrap.min.js',
            'resources/js/imagesloaded.pkgd.min.js',
            'resources/js/isotope.pkgd.min.js',
            'resources/js/jquery.barfiller.js',
            'resources/js/jquery.counterup.min.js',
            'resources/js/jquery.nav.js',
            'resources/js/jquerymeanmenu.js',
            'resources/js/jqueryscrolllUp.js',
            'resources/js/owl.carousel.min.js',
            'resources/js/particls.js',
            'resources/js/popper.min.js',
            'resources/js/waypoints.min.js',
            'resources/js/wow.js'],
            refresh: true,
        }),
    ],
});
