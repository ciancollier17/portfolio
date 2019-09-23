var gulp = require('gulp');
var concat = require('gulp-concat');

gulp.task('wordpresscss', function () {
  return gulp.src(['./wordpress_template_files/theme_details.css', './styles/*.css'])
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./wordpress_template_files/build/ciancolliersportfolio/'));
});

gulp.task('wordpresscopy', function () {
  return gulp.src('./wordpress_template_files/*.php')
    .pipe(gulp.dest('./wordpress_template_files/build/ciancolliersportfolio/'));
});

gulp.task('buildwordpress', gulp.series('wordpresscss', 'wordpresscopy'));
