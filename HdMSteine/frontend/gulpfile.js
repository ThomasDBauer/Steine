

// Gulp Setup
const gulp = require('gulp');

const watch = require('gulp-watch');
const del = require('del');
const rename = require('gulp-rename');
const livereload = require('gulp-livereload');

const cssnano = require('gulp-cssnano');
const autoprefix = require('gulp-autoprefixer');
const uncss = require('gulp-uncss');
const sass = require('gulp-sass');

const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

const imagemin = require('gulp-imagemin');

// Paths
var paths = {
    html: ['./*.html'],

    sass: ['./src/scss/*.{scss,sass}'],
    css: ['./src/css/*.css', '!./assets/src/css/*.min.css'],
    mincss: ['./src/css/*.min.css'],

    js: ['./src/js/*.js', '!./assets/src/js/*.min.js'],
    minjs: ['./src/js/*.min.js'],

    img: ['./src/images/*.{png,ico,gif,jpg,jpeg,gif}'],
    fonts: ['./src/fonts/*'],
    src: ['./src'],
    dist: ['./dist'],

};

// Basic tasks
gulp.task('default', ['css', 'js', 'images', 'fonts', 'bootstrap', 'php']);

gulp.task('build', ['clean', 'default']);

// todo: work here, livereload doesn't work
gulp.task('watch', function () {
    livereload.listen({
        host: 'localhost',
        start: true
    });
    gulp.watch(paths.html, function () {
        gulp.src(paths.html)
            .pipe(gulp.dest(paths.html))
            .pipe(livereload())
    });
    gulp.watch(paths.js, ['js']);
    gulp.watch(paths.sass, ['sass']);
    gulp.watch(paths.css, ['css']);
});

gulp.task('clean', function () {
    return del(paths.dist)
});

// All tasks for css
gulp.task('css', ['sass', 'mincss'], function () {
    return gulp.src(paths.css)
        .pipe(autoprefix({
            browsers: ['last 5 versions']
        }))
        .pipe(cssnano())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./dist/css'))
});

gulp.task('mincss', function () {
    return gulp.src(paths.mincss)
        //.pipe(uncss({
        //    html: ['index.html', 'impressum.html']
        //}))
        .pipe(gulp.dest('assets/dist/css'))
});

gulp.task('sass', function () {
    return gulp.src(paths.sass)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('assets/src/css'))
});

// All js tasks
gulp.task('js', ['minjs'], function () {
    return gulp.src(paths.js)
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('assets/dist/js'))
        .pipe(livereload())
});

gulp.task('minjs', function () {
    return gulp.src(paths.minjs)
        .pipe(gulp.dest('assets/dist/js'))
});

// Other tasks
gulp.task('images', function () {
    return gulp.src(paths.img)
        .pipe(imagemin())
        .pipe(gulp.dest('assets/dist/images'))
});

gulp.task('fonts', function () {
    return gulp.src(paths.fonts)
        .pipe(gulp.dest('assets/dist/fonts'))
});

gulp.task('bootstrap', function () {
    return gulp.src('assets/src/bootstrap/**')
        .pipe(gulp.dest('assets/dist/bootstrap'))
});

gulp.task('php', function () {
    return gulp.src('assets/src/php/**')
        .pipe(gulp.dest('assets/dist/php'))
});

// cms tasks

gulp.task('cms_sass', function () {
    return gulp.src(paths.cms_sass)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('cms/css'))
});

gulp.task('cms_css', ['cms_sass'], function () {
    return gulp.src(paths.cms_css)
        .pipe(autoprefix({
            browsers: ['last 5 versions']
        }))
        //.pipe(uncss({
        //    html: ['cms/www/*']
        //}))
        .pipe(cssnano())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('assets/dist/css'))
});