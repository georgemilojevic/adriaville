const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css', { implementation: require('node-sass') })
    // .styles([
    //     'resources/assets/css/amsify.select.css',
    //     'resources/assets/css/lightpick.css',
    //     'resources/assets/css/owl.carousel.min.css',
    //     'resources/assets/css/owl.theme.default.min.css',
    //     'resources/assets/css/style.css',
    // ], 'public/css/all.css');
    // mix.combine(files, destination);
;
