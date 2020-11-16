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

mix.js('src/app.js', 'dist/')
    .sass('src/app.scss', 'dist/');

mix.js([
    'resources/js/app.js',
    'resources/js/bootstrap',
], 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.minify('public/js/app.js');

