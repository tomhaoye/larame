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

var files = {
    scripts:[
        'lib/jquery.min.js',
        'lib/bootstrap.min.js',
        'lib/jquery.pjax.js',
        'lib/jquery.rotate.min.js',
        'layouts'
    ],
    styles:[
        'lib/bootstrap.min.css',
        'lib/font-awesome.min.css',
        'lib/animate.css',
        'layouts'
    ],
    sass:[
    ]
};

//elixir.config.sourcemaps = false;

elixir(function (mix) {
    mix.styles(files.styles);
});

elixir(function (mix) {
    mix.scripts(files.scripts);
});

elixir(function(mix) {
    mix.version(['css/all.css', 'js/all.js']);
});