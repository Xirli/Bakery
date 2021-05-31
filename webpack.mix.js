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
    .vue()
    .less('resources/less/header.less', 'public/css').options({processCssUrls: false})
    .less('resources/less/footer.less', 'public/css')
    .less('resources/less/container.less', 'public/css')
    .less('resources/less/landing.less', 'public/css')
    .less('resources/less/product.less', 'public/css')
    .less('resources/less/products.less', 'public/css')
    .less('resources/less/contacts.less', 'public/css')
    .less('resources/less/register.less', 'public/css')
    .less('resources/less/login.less', 'public/css')
    .less('resources/less/news.less', 'public/css')
    .less('resources/less/confirm_order.less', 'public/css')
    .less('resources/less/news_item.less', 'public/css')
    .less('resources/less/shopping_cart.less', 'public/css')
    .less('resources/less/profile_page.less', 'public/css')
    .sass('resources/sass/app.scss', 'public/css');
