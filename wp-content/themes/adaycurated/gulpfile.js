var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var mamp = require('gulp-mamp');
var options = {};

gulp.task('sass', function(){
  return gulp.src('scss/base.scss')
    .pipe(sass())
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('start', ['sass'], function(cb){
  mamp(options,'start', cb);
});

gulp.task('mamp', ['start']);

gulp.task('watch', ['mamp', 'browserSync', 'sass'], function(){
  gulp.watch('scss/**/*.scss', ['sass']);
});

// gulp.task('browserSync', function() {
//   browserSync.init({
//     server: {
//       baseDir: 'app'
//     },
//     {proxy: 'localhost:3000'}
//   })
// });

gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: 'app',
      proxy: 'localhost:8888'
    }
  })
});

