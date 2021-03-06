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
    .sass('resources/sass/app.scss', 'public/css');
mix.js('resources/js/appModel.js', 'public/js');
mix.js('resources/js/backgroundFront.js', 'public/js');
mix.js('resources/js/modelWindow.js', 'public/js');
mix.js('resources/js/onlyModel.js', 'public/js');
mix.js('resources/js/contact.js', 'public/js');
mix.js('resources/js/about.js', 'public/js');
mix.js('resources/js/services.js', 'public/js');
mix.js('resources/js/oneModel.js', 'public/js');
mix.js('resources/js/numPhoto.js', 'public/js');
mix.js('resources/js/language.js', 'public/js');










mix.js('resources/js/admin/app.js', 'public/js/admin');

