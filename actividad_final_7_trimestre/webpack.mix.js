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
mix.styles(['resources/css/app.css','resources/css/bootstrap.min.css','resources/css/now-ui-dashboard.css','resources/css/now-ui-dashboard.min.css'], 'public/css/app.css')
    .scripts([ 'resources/js/app.js','resources/js/now-ui-dashboard.min.js','resources/js/now-ui-dashboard.js','resources/js/bootstrap.js','resources/js/app.js','resources/js/bootstrap.min.js','resources/js/jquery.min.js','resources/js/popper.min.js','resources/js/bootstrap-notify.js','resources/js/chartjs.min.js','resources/js/perfect-scrollbar.jquery.min.js'],'public/js/app.js')


