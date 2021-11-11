const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.options({
    processCssUrls: false
});

mix.js('resources/js/common.js', 'public/js')
    .js('resources/js/device.min.js', 'public/js')
    .js('resources/js/scripts.min.js', 'public/js')
    .postCss('resources/css/main.min.css', 'public/css')
    .postCss('resources/css/style.css', 'public/css')
