/* Requare firstly install Node.js and
put in comsole folloving commands to install needle modules:
npm install gulp
npm install gulp-sass
npm install gulp-autoprefixer
npm install gulp-concat
npm install gulp-clean-css
npm install gulp-notify
npm install gulp-rename
npm install gulp-uncss
npm install imagemin-webp

*/

var gulp = require('gulp'); //Инициализация Gulp
    sass = require('gulp-sass'), //Конвертация sass в css
    autoprefixer = require('gulp-autoprefixer'), //Кроссбраузерность
    concat = require('gulp-concat'), //Склейка нксколько файлов в один
    cleanCSS = require('gulp-clean-css'), //Восстановление компресованого файла
    notify = require("gulp-notify"), //Отправка сообщений на основе ошибок ОС
    rename = require("gulp-rename"), //Перейменование файлов
    uncss = require('gulp-uncss'), //Оптимизация css файлов (удаление дублей и не использованых стилей)
    imageminWebp = require('imagemin-webp'); //Создание webp изображений

gulp.task('sass', function() {
    gulp.src('sass/*.scss')
        .pipe(sass({style: 'compressed'}))
        .on('error', sass.logError)
        .pipe(autoprefixer({
            browsers: [
                'Android 2.3',
                'Android >= 4',
                'Chrome >= 20',
                'Firefox >= 24', // Firefox 24 is the latest ESR
                'Explorer >= 8',
                'iOS >= 6',
                'Opera >= 12',
                'Safari >= 6'
            ],
            cascade: false
        }))
        .pipe(gulp.dest('css/'));
});

gulp.task('watch', function(){
    gulp.watch('sass/*.scss', ['sass']);
});

gulp.task('sass-min', function() {
    gulp.src('sass/*.scss')
        .pipe(sass({style: 'compressed'}))
        .on('error', sass.logError)
        .pipe(autoprefixer({
            browsers: [
                'Android 2.3',
                'Android >= 4',
                'Chrome >= 20',
                'Firefox >= 24', // Firefox 24 is the latest ESR
                'Explorer >= 8',
                'iOS >= 6',
                'Opera >= 12',
                'Safari >= 6'
            ],
            cascade: false
        }))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('css/'))
        .pipe(browserSync.reload({stream:true}));
});

gulp.task('min-css', function () {
  gulp.src('sass/*.scss')
    .pipe(sass({style: 'compressed'}))
    .on('error', sass.logError)
    .pipe(autoprefixer({
            browsers: [
                'Android 2.3',
                'Android >= 4',
                'Chrome >= 20',
                'Firefox >= 24', // Firefox 24 is the latest ESR
                'Explorer >= 8',
                'iOS >= 6',
                'Opera >= 12',
                'Safari >= 6'
            ],
            cascade: false
        }))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename("style.min.css"))
    .pipe(gulp.dest('css/'));
});

gulp.task('webp', function () {
	return gulp.src('images/*.{jpg,png}')
		.pipe(imageminWebp({quality: 60})())
		.pipe(gulp.dest('images/webp'));
});

gulp.task('default',['sass']);