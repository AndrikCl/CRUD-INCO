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
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

    mix.styles([
        'resources/template/css/bootstrap.min.css',
        'resources/template/css/font-awesome.min.css',
        'resources/template/css/ionicons.min.css',
        'resources/template/css/AdminLTE.min.css',
        'resources/template/css/_all-skins.min.css',
    
    ],'public/css/app.css')
      .scripts([
        'resources/template/js/jquery.min.js',
        'resources/template/js/bootstrap.min.js',
        'resources/template/js/jquery.slimscroll.min.js',
        'resources/template/js/fastclick.js',
        'resources/template/js/adminlte.min.js',
        'resources/template/js/demo.js',
        ],'public/js/app.js');	