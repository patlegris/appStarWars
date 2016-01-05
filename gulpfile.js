
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    minify = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename');

var path = {
    'resources': {
        'sass': './resources/assets/sass'
    },
    'public': {
        'css': './public/assets/css'
    },
    'sass': './resources/assets/sass/**/*.scss'
};


gulp.task('sass_task', function () {
    return gulp.src(path.resources.sass + '/app.scss')
        .pipe(sass({onError: console.error.bind(console, 'SASS ERROR')}))
        .pipe(minify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(path.public.css))
});


gulp.task('watch', function () {
    gulp.watch(path.sass, ['sass_task']);
// gulp.watch(path.sass, ['js_task']);
});

gulp.task('default', ['watch']); // gulp.task('default', ['watch', 'phpunit']);
