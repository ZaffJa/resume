let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');


mix.styles([
    'public/css/bootstrap.min.css',
    'public/css/owl.carousel.css',
    'public/css/owl.theme.default.css',
    'public/css/style.min.css',
], 'public/css/all.css');


mix.scripts([
    'public/js/jquery-1.11.2.min.js',
    'public/js/bootstrap.min.js',
    'public/js/jquery.inview.min.js',
    'public/js/smoothscroll.js',
    'public/js/jquery.knob.min.js',
    'public/js/owl.carousel.min.js',
    'public/js/isotope.pkgd.min.js',
    'public/js/imagesloaded.pkgd.min.js',
    'public/js/scripts.min.js',
], 'public/js/all.js');