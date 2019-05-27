const gulp = require('gulp');
const sass = require('gulp-sass');
const livereload = require('gulp-livereload');
const sourcemaps = require('gulp-sourcemaps');
const minifyCss = require('gulp-clean-css');

gulp.task('sass-dev', function () {
    return gulp.src('./styles/*.scss')
      .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./dist'))
        .pipe(livereload());
});

gulp.task('sass', function () {
    return gulp.src('./styles/*.scss')
        .pipe(sass())
        .pipe(minifyCss())
        .pipe(gulp.dest('./dist'))
});

gulp.task('default', gulp.parallel('sass-dev'));
gulp.task('production', gulp.parallel('sass'));

gulp.task('watch', gulp.series('sass-dev', function() {
  livereload.listen();
  gulp.watch(['*.php', '*.js']).on('change', livereload.changed);
  gulp.watch('./styles/**', gulp.series('sass-dev'));
}));
