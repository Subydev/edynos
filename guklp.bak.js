const elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss');
    mix.copy('resources/assets/vendor/bootstrap/fonts', 'public/fonts');
    mix.copy('resources/assets/vendor/font-awesome/fonts', 'public/fonts')
    mix.copy('resources/assets/landing', 'public/assets/landing')
    mix.copy('resources/assets/mail', 'public/assets/mail')
    mix.copy('resources/assets/css', 'public/assets/css')
    mix.copy('resources/assets/font-awesome', 'public/assets/font-awesome')
    mix.styles([
        'resources/assets/vendor/bootstrap/css/bootstrap.css',
        'resources/assets/vendor/animate/animate.css',
        'resources/assets/vendor/font-awesome/css/font-awesome.css',
    ], 'public/css/vendor.css', './');
    mix.scripts([
        'resources/assets/js/jquery-3.1.1.min.js',
        'resources/assets/js/bootstrap.js',
        'resources/assets/js/plugins/metisMenu/jquery.metisMenu.js',
        'resources/assets/vendor/slimscroll/jquery.slimscroll.min.js',
        'resources/assets/js/plugins/pace/pace.min.js',
        'resources/assets/js/app.js',
        'resources/assets/js/inspinia.js',
    ], 'public/js/app.js', './');

});
