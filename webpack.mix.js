
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

let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: 'http://127.0.0.1:8000', // La URL de tu servidor Laravel
        files: [
            'app/**/*.php',
            'resources/views/**/*.blade.php',
            'routes/**/*.php'
        ],
        notify: false,
        open: false
    });
