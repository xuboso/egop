var elixir = require('laravel-elixir');
var bowerDir = './resources/assets/vendor/';

var stylePaths = {
    'bootstrap': bowerDir + 'bootstrap/dist/css/bootstrap.min.css',
    'fontawesome': bowerDir + 'font-awesome/css/font-awesome.min.css',
    'ionicons': bowerDir + 'ionicons/css/ionicons.min.css',
    'adminlte': bowerDir + 'AdminLTE/dist/css/AdminLTE.min.css',
    'skins': bowerDir + 'AdminLTE/dist/css/skins/skin-blue.min.css',
    'icheck': bowerDir + 'AdminLTE/plugins/iCheck/square/blue.css',
};

var scriptPaths = {
    'jquery': bowerDir + 'jquery/dist/jquery.min.js',
    'bootstrap': bowerDir +'bootstrap/dist/js/bootstrap.min.js',
    'adminlte': bowerDir + 'AdminLTE/dist/js/app.min.js',
    'icheck': bowerDir + 'AdminLTE/plugins/iCheck/icheck.min.js',
};

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
    mix.less('admin.less', 'public/css/admin/admin.css');

    mix.copy(stylePaths.bootstrap, 'public/css/admin');
    mix.copy(stylePaths.fontawesome, 'public/css/admin');
    mix.copy(scriptPaths.icheck, 'public/js/admin');

    mix.styles([
        stylePaths.bootstrap,
        stylePaths.fontawesome,
        stylePaths.ionicons,
        stylePaths.skins,
        stylePaths.icheck,
    ], 'public/css/admin/vendor.css');

    mix.scripts([
        scriptPaths.jquery,
        scriptPaths.bootstrap,
        scriptPaths.adminlte,
    ], 'public/js/admin/vendor.js');

    mix.version(['public/css/admin/vendor.css', 'public/js/admin/vendor.js']);
});
