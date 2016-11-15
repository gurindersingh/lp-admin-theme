const elixir = require('laravel-elixir');
var postStylus = require('poststylus');
var rupture = require('rupture');
var gulp = require('gulp');
var notify = require("gulp-notify");
var rename = require('gulp-rename');
require('laravel-elixir-vue-2');

var paths = {
    node: 'node_modules',
    public: 'public',
    cssDestination: 'public/css',
    jsDestination: 'public/js',
    fontsDestination: 'public/fonts',
    imagesDestination: 'public/images',
    resource: 'resources',
    jsSource: 'resources/assets/js',
    adminJsSource: 'resources/assets/js/admin',
    adminStylusSource: 'resources/assets/stylus/admin',
};

/*=== Initial Setup - copying & moving files ===*/
gulp.task('setup', [], function () {
    
    /*=== FONTS - Font awesome - https://github.com/FortAwesome/Font-Awesome ===*/
    gulp.src(paths.node + "/font-awesome/fonts/**.*")
        .pipe(gulp.dest(paths.fontsDestination));
    gulp.src(paths.node + "/font-awesome/css/font-awesome.css")
        .pipe(gulp.dest(paths.adminStylusSource + '/plugins'));

    /*=== FONTS - Material Design - https://github.com/Templarian/MaterialDesign ===*/
    gulp.src(paths.node + "/mdi/fonts/**.*")
        .pipe(gulp.dest(paths.fontsDestination));
    gulp.src(paths.node + "/mdi/css/materialdesignicons.css")
        .pipe(gulp.dest(paths.adminStylusSource + '/plugins'));

    /*=== iCheck ===*/
    gulp.src(paths.node + "/icheck/skins/*/*.png")
        .pipe(gulp.dest(paths.public + '/images/icheck'));

    gulp.src(paths.node + "/icheck/skins/*/*.css")
        .pipe(rename({
            extname: ".styl"
        }))
        .pipe(gulp.dest(paths.adminStylusSource + '/plugins/icheck'));

    /*=== Tipso ===*/
    gulp.src(paths.node + "/tipso/src/tipso.css")
        .pipe(gulp.dest(paths.adminStylusSource + '/plugins'));

    /*=== Morris ===*/
    gulp.src(paths.node + "/morris.js/morris.css")
        .pipe(gulp.dest(paths.adminStylusSource + '/plugins'));

    /*=== Quill ===*/
    gulp.src(paths.node + "/quill/dist/quill.bubble.css")
        .pipe(gulp.dest(paths.adminStylusSource + '/plugins'));
    gulp.src(paths.node + "/quill/dist/quill.snow.css")
        .pipe(gulp.dest(paths.adminStylusSource + '/plugins'));
    gulp.src(paths.node + "/quill/dist/quill.core.css")
        .pipe(gulp.dest(paths.adminStylusSource + '/plugins'));    
});

/*=== Elixir ===*/
elixir(mix => {
    mix
        .stylus('admin/index.styl', 'public/css/admin.css', {
            use: [postStylus(['lost']), rupture()],
            'include css': true
        })
        .webpack('admin/index.js', 'public/js/admin.js')
        .browserSync({
            proxy: "laravelplus.dev"
        });
});
