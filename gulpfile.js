var gulp = require('gulp');
var concat = require('gulp-concat');
var config = require('./config');

gulp.task('wordpresscss', function () {
  if (config.WORDPRESS_BUILD_PATH) {
    return gulp.src(['./wordpress_template_files/theme_details.css', './styles/*.css'])
      .pipe(concat('style.css'))
      .pipe(gulp.dest(config.WORDPRESS_BUILD_PATH + 'ciancolliersportfolio/'));
  } else {
    console.log("Please Set WORDPRESS_BUILD_PATH In config.js");
  }
});

gulp.task('wordpresscopy', function () {
  if (config.WORDPRESS_BUILD_PATH) {
    return gulp.src('./wordpress_template_files/*.php')
      .pipe(gulp.dest(config.WORDPRESS_BUILD_PATH + 'ciancolliersportfolio/'));
  } else {
    console.log("Please Set WORDPRESS_BUILD_PATH in config.js");
  }
});

gulp.task('wordpressimgcopy', function () {
  if (config.WORDPRESS_BUILD_PATH) {
    return gulp.src('./styles/img/*.{jpg,jpeg,gif,png}')
      .pipe(gulp.dest(config.WORDPRESS_BUILD_PATH + 'ciancolliersportfolio/img/'));
  } else {
    console.log("Please Set WORDPRESS_BUILD_PATH in config.js");
  }
});

gulp.task('wordpressscriptsconcat', function () {
  if (config.WORDPRESS_BUILD_PATH) {
    return gulp.src('./scripts/*.js')
      .pipe(concat('scripts.js'))
      .pipe(gulp.dest(config.WORDPRESS_BUILD_PATH + "ciancolliersportfolio/"));
  } else {
    console.log("Please Set WORDPRESS_BUILD_PATH in config.js");
  }
})

gulp.task('buildwordpress', gulp.series('wordpresscss', 'wordpresscopy', 'wordpressimgcopy', 'wordpressscriptsconcat'));
