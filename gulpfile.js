var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
        .copy(
        'vendor/bower_components/bootstrap-sass-official/assets/stylesheets/',
        'resources/assets/sass/bootstrap'
    )
        .copy(
        'vendor/bower_components/jquery/dist/jquery.min.js',
        'resources/assets/js/jquery.js'
    )
        .copy(
        'vendor/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
        'resources/assets/js/bootstrap.js'
    )
        .copy(
        'vendor/bower_components/font-awesome-sass/assets/stylesheets/',
        'resources/assets/sass/font-awesome'
    )
        .copy(
        'vendor/bower_components/animate-sass/',
        'resources/assets/sass/animate'
    );
});