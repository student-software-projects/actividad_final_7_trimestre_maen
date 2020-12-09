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
mix.styles(['resources/css/black-dashboard.css','resources/css/black-dashboard.min.css','resources/css/nucleo-icons.css'], 'public/css/app.css')
    .scripts([ 'resources/js/black-dashboard.js','resources/js/black-dashboard.min.js','resources/js/bootstrap.min.js','resources/js/bootstrap-notify.js','resources/js/chartjs.min.js','resources/js/jquery.min.js','resources/js/perfect-scrollbar.jquery.min.js','resources/js/popper.min.js','resources/js/gulpfile.js'],'public/js/app.js')



