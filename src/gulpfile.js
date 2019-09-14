var gulp = require('gulp');

// Plugins
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var autoprefixer = require('gulp-autoprefixer');

// Compile SASS
gulp.task('sass', function () {
  return gulp.src('./scss/**/*.scss')
    .pipe(sassGlob())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('./css/'));
});

// Watch Actions (Default)
gulp.task('default', function () {
  gulp.watch('./scss/**/*.scss', gulp.series('sass'));
});