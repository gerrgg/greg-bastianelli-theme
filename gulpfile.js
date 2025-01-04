const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();

const paths = {
  styles: {
    src: './src/scss/**/*.scss',
    dest: './assets/css'
  },
  scripts: {
    src: './src/js/**/*.js',
    dest: './assets/js'
  }
};

// Compile SCSS
function styles() {
  return gulp
    .src(paths.styles.src)
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(cleanCSS())
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

// Minify JS
function scripts() {
  return gulp
    .src(paths.scripts.src)
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browserSync.stream());
}

// Watch files
function watch() {
  browserSync.init({
    proxy: 'http://localhost:10003/', // Your custom local development URL
    open: true, // Automatically open the browser
    notify: false // Disable BrowserSync notifications in the browser
  });

  gulp.watch(paths.styles.src, styles);
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch('./**/*.php').on('change', browserSync.reload);
}

const build = gulp.series(gulp.parallel(styles, scripts), watch);

exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;
exports.default = build;
