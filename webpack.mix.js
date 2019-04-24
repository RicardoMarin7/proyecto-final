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

mix.sass('resources/sass/normalize.scss','public/css')
   .sass('resources/sass/styles.scss','public/css');

mix.scripts([
   'node_modules/jquery/dist/jquery.js',
   'node_modules/popper.js/dist/popper.js',
  'node_modules/bootstrap/dist/js/bootstrap.js'  
],'public/js/all.js','./');
