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

mix.js([
    'resources/js/app.js',
], 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .version();

mix.minify('public/js/app.js');
mix.minify('public/css/bootstrap.css');

mix.styles([
    'public/css/responsive.css',
    'public/css/sidebar.css',
    'public/css/table.css',
    'public/css/bootstrap.css',
], 'public/css/all.css')
    .browserSync('http://127.0.0.1:8080/')
    .version();

