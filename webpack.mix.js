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
    .js('resources/js/slider.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .less('resources/less/header.less', 'public/css/header.css')
    .options({processCssUrls: false})
    .less('resources/less/landing.less', 'public/css/landing.css')
    .options({processCssUrls: false})
    .less('resources/less/footer.less', 'public/css/footer.css')
    .options({processCssUrls: false})
    .sourceMaps();
