let mix = require('laravel-mix');

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

// mix.scripts([
//
//     'resources/assets/Admin-gh-pages/vendor/jquery/jquery.min.js',
//     'resources/assets/Admin-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js',
//     'resources/assets/Admin-gh-pages/vendor/jquery-easing/jquery.easing.min.js',
//     'resources/assets/Admin-gh-pages/vendor/datatables/jquery.dataTables.js',
//
//     'resources/assets/Admin-gh-pages/js/sb-admin.min.js',
//     'resources/assets/Admin-gh-pages/demo/datatables-demo.js',
//
//
//
//
//
//
// ], 'public/js/admin.js');


// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
//


mix.styles([
    'resources/assets/Admin-gh-pages/css/sb-admin.css',
    'resources/assets/Admin-gh-pages/vendor/bootstrap/css/bootstrap.min.css',
    'resources/assets/Admin-gh-pages/vendor/fontawesome-free/css/all.min.css',
    'resources/assets/Admin-gh-pages/vendor/datatables/dataTables.bootstrap4.css',






], 'public/css/admin.css');

