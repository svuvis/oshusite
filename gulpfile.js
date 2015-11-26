var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.styles([
        'bootstrap.min.css',
        'font-awesome.min.css',
        'animate.min.css',
        'lightbox.css',
        'syntax/shCore.css',
        'syntax/shThemeDefault.css',
        'style.css',
        'color-default.css',
        'width-full.css',
        'custom/style.css'
    ],'public/css/all.css');

    mix.styles([
        'bootstrap.min.css',
        'font-awesome.min.css',
        'metisMenu.min.css',
        'sb-admin-2.css',
        'timeline.css',
        'morris.css',
        'toastr.min.css',
        'redactor.css',
        'bootstrap-datetimepicker.min.css'
    ],'public/css/admin-all.css');

    mix.scripts([
        'jquery.min.js',
        'jquery.cookie.js',
        'bootstrap.min.js',
        'jquery.mixitup.min.js',
        'lightbox-2.6.min.js',
        'holder.js',
        'app.js'
    ],'public/js/all.js');

    mix.scripts([
        'jquery.min.js',
        'bootstrap.min.js',
        'toastr.min.js',
        'redactor.js',
        'table.js',
        'video.js',
        'speakingurl.min.js',
        'slugify.min.js',
        'moment.min.js',
        'nl.js',
        'bootstrap-datetimepicker.min.js',
        'jquery.ui.widget.js',
        'jquery.iframe-transport.js',
        'jquery.fileupload.js'
    ],'public/js/admin-all.js');

    mix.copy('resources/assets/fonts', 'public/fonts');
    mix.copy('resources/assets/img', 'public/img');
    mix.copy('resources/assets/js/html5shiv.js', 'public/js');
    mix.copy('resources/assets/js/respond.min.js', 'public/js');
});
