'use strict';

var projet = "comediestar";

// Include Gulp & Tools We'll Use
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var svg2png = require('gulp-svg2png');
var sass = require('gulp-sass');
var minifyCSS = require('gulp-minify-css');
var sourcemaps = require('gulp-sourcemaps');
var rename = require("gulp-rename");
var prefix = require('gulp-autoprefixer');
var rs = require('run-sequence');


// Build Production Files, the Default Task
gulp.task('default', function() {
    rs('build-clean-css', 'sass', 'build-clean-js', 'scripts');
});

gulp.task('css', function() {
    rs('build-clean-css', 'sass');
});

gulp.task('js', function() {
    rs('build-clean-js', 'scripts');
});

// Build Production Files, and watch
gulp.task('local', ['css'], function(){
    rs('watch');
});


/* Compile sass, sourcemap, prefix and min sass files */
gulp.task('sass', function () {
    gulp.src('application/css/src/front/'+projet+'.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({errLogToConsole: true}))
    .pipe(prefix("last 1 version", "> 1%", "ie 8", "ie 7", { cascade : true }))
    .pipe(sourcemaps.write('maps'))
    .pipe(gulp.dest('application/css/dist/'))
    /* minify */
    .pipe(minifyCSS())
    .pipe(rename(projet +'.min.css'))
    .pipe(gulp.dest('application/css/dist/'));
});



/* Clean dist css folder */
gulp.task('build-clean-css', function() {
    return gulp.src([
        'application/css/dist/*',
        ])
    .pipe($.clean());
});

/* Clean dist js folder */
gulp.task('build-clean-js', function() {
    return gulp.src([
        'application/js/dist/*',
        ])
    .pipe($.clean());
});

// Compile and Automatically Prefix Scripts
gulp.task('scripts', function () {
    return gulp.src([
            'application/js/src/vendor/jquery-1.10.2.js',
            'application/js/src/vendor/parsley-fr.js',
            'application/js/src/vendor/parsley.min.js',
            'application/js/src/front/main.js',
    ])
    .on('error', console.error.bind(console))
        //Concatenate scripts and making sure they'll still work
        .pipe($.concat(projet+'.js'))
        .pipe(gulp.dest('application/js/dist'))
        //Minify scripts
        .pipe($.uglify())
        .pipe($.concat(projet+'.min.js'))
        .pipe($.stripDebug())
        .pipe(gulp.dest('application/js/dist'))
        .pipe($.size({title: 'scripts'}));
});

/* convert svg to png */
gulp.task('svg2png', function () {
    gulp.src('images/**/*.svg')
    .pipe(svg2png())
    .pipe(gulp.dest('images/'));
});

/* watcher for sass */
var watcher = gulp.task('watch', function () {
    gulp.watch(['application/css/src/front/**/*.scss'], ['css'])
    
});



watcher.on('change', function (event) {
   console.log('Event type: ' + event.type); // added, changed, or deleted
   console.log('Event path: ' + event.path); // The path of the modified file
});

