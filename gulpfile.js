var elixir = require('laravel-elixir'),
    livereload = require('gulp-livereload'),
    clean = require('rimraf'),
    gulp = require('gulp');

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

var config = {
    assets_path: './resources/assets',
    build_path:  './public/build'
};

config.build_path_js = config.build_path+'/js';
config.build_vendor_path_js = config.build_path+'/vendor';
config.vendor_path_js = [
    config.assets_path+"/js/jquery.min.js",
    config.assets_path+"/js/bootstrap.min.js",
    config.assets_path+"/js/smooth-scroll.js",
    config.assets_path+"/js/wow.min.js",
    config.assets_path+"/js/jquery.hcaptions.js",
    config.assets_path+"/js/nivo-lightbox.min.js",
    config.assets_path+"/js/bootstrapValidator.min.js",
    config.assets_path+"/js/app.min.js",

];

config.build_path_css = config.build_path+"/css";
config.build_vendor_path_css = config.build_path_css+"/vendor";
config.vendor_path_css = [
    config.assets_path+"/css/bootstrap.min.css",
    config.assets_path+"/MDicons/css/MDicon.min.css",
    config.assets_path+"/css/animate.css",
    config.assets_path+"/css/themes/default/default-nivo-theme.css",
    config.assets_path+"/css/nivo-lightbox.css",
    config.assets_path+"/css/style.min.css"
];

gulp.task('clear-build-folder',function(){
    clean.sync(config.build_path);
});


gulp.task('default',['clear-build-folder'],function(){
    elixir(function(mix){
        mix.styles(config.vendor_path_css.concat([config.assets_path+"/css/**/*.css"]),
            'public/css/all.css',config.assets_path);

        mix.scripts(config.vendor_path_js.concat([config.assets_path+"/js/**/*.js"]),
            'public/js/all.js',config.assets_path);

        mix.version(['js/all.js','css/all.css']);
    });
});
