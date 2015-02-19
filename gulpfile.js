var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
        .copy(
        'vendor/bower_components/bootstrap-sass-official/assets/stylesheets/',
        'resources/assets/sass/bootstrap'
    )
        .copy(
        'vendor/bower_components/font-awesome-sass/assets/stylesheets/',
        'resources/assets/sass/font-awesome'
    )
        .copy(
        'vendor/bower_components/animate-sass/',
        'resources/assets/sass/animate'
    )
        .copy(
        'vendor/bower_components/jquery/dist/jquery.min.js',
        'public/js/jquery.js'
    )
        .copy(
        'vendor/bower_components/jquery/dist/jquery.min.map',
        'public/js/jquery.min.map'
    )
        .copy(
        'vendor/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
        'public/js/bootstrap.js'
    );
});