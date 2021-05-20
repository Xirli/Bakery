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
    .less('resources/less/contacts.less', 'public/css/contacts.css')
    .options({processCssUrls: false})
    .less('resources/less/about.less', 'public/css/about.css')
    .options({processCssUrls: false})
    .less('resources/less/container.less', 'public/css/container.css')
    .options({processCssUrls: false})
    .less('resources/less/news.less', 'public/css/news.css')
    .options({processCssUrls: false})
    .less('resources/less/products.less', 'public/css/products.css')
    .options({processCssUrls: false})
    .less('resources/less/product.less', 'public/css/product.css')
    .options({processCssUrls: false})
    .less('resources/less/footer.less', 'public/css/footer.css')
    .options({processCssUrls: false})
    .sourceMaps();

mix.less('resources/less/login.less', 'public/css/login.css')
    .less('resources/less/register.less', 'public/css/register.css')
    .less('resources/less/shopping_cart.less', 'public/css/shopping_cart.css')
    .less('resources/less/profile_page.less', 'public/css/profile_page.css')
    .less('resources/less/confirm_order.less', 'public/css/confirm_order.css')
