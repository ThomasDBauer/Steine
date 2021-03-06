// Gulp Setup
const gulp = require('gulp');

//const watch = require('gulp-watch');
const del = require('del');
const rename = require('gulp-rename');
//const livereload = require('gulp-livereload');

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

    //sass: ['./src/scss/*.{scss,sass}'],
    sass: ['./src/scss/style.scss'],
    css: ['./src/css/*.css', '!./src/css/*.min.css'],
    mincss: ['./src/css/*.min.css'],

    js: ['./src/js/*.js', '!./src/js/*.min.js'],
    minjs: ['./src/js/*.min.js'],

    img: ['./src/images/*.{png,ico,gif,jpg,jpeg,gif}'],
    fonts: ['./src/fonts/*'],
    src: ['./src'],
    dist: ['./dist']

};

// Basic tasks
gulp.task('default', ['css', 'js', 'images', 'fonts', 'bootstrap', 'php']);

gulp.task('build', ['clean', 'default']);

// todo: work here, livereload doesn't work
//gulp.task('watch', function () {
//    livereload.listen({
//        host: 'localhost',
//        start: true
//    });
//    gulp.watch(paths.html, function () {
//        gulp.src(paths.html)
//            .pipe(gulp.dest(paths.html))
//            .pipe(livereload())
//    });
//    gulp.watch(paths.js, ['js']);
//    gulp.watch(paths.sass, ['sass']);
//    gulp.watch(paths.css, ['css']);
//});

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
        .pipe(gulp.dest('dist/css'))
});

gulp.task('sass', function () {
    return gulp.src(paths.sass)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('src/css'))
});

// All js tasks
gulp.task('js', ['minjs'], function () {
    return gulp.src(paths.js)
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('dist/js'));
        //.pipe(livereload())
});

gulp.task('minjs', function () {
    return gulp.src(paths.minjs)
        .pipe(gulp.dest('dist/js'))
});

// Other tasks
gulp.task('images', function () {
    return gulp.src(paths.img)
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'))
});

gulp.task('fonts', function () {
    return gulp.src(paths.fonts)
        .pipe(gulp.dest('dist/fonts'))
});

gulp.task('bootstrap', function () {
    return gulp.src('src/bootstrap/**')
        .pipe(gulp.dest('dist/bootstrap'))
});

gulp.task('php', function () {
    return gulp.src('src/php/**')
        .pipe(gulp.dest('dist/php'))
});