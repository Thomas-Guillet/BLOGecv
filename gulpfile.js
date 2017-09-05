var gulp = require('gulp');
var $ = require('gulp-load-plugins')();

var browserSync = require('browser-sync');
var reload = browserSync.reload;

var browserify = require('browserify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var del = require('del');
var path = require('path');

var report_error = function(error) {
    $.notify({
        title: 'An error occured with a Gulp task',
        message: 'Check you terminal for more informations'
    }).write(error);

    console.log(error.toString());
    this.emit('end');
};


// gulp.task('styles', function () {
//     return gulp.src('src/scss/main.scss')
//         .pipe($.sourcemaps.init())
//         .pipe($.sass({
//             precision: 6, outputStyle: 'compressed', sourceComments: false, indentWidth: 4,
//         }))
//         .on('error', report_error)
//         .pipe($.autoprefixer({
//             browsers: [
//             'ie >= 10',
//             'ie_mob >= 10',
//             'ff >= 30',
//             'chrome >= 34',
//             'safari >= 7',
//             'opera >= 23',
//             'ios >= 7',
//             'android >= 4.4',
//             'bb >= 10'
//             ]
//         }))
//         .pipe($.sourcemaps.write())
//         .pipe(gulp.dest('dest/css'))
//         .pipe($.size({title: 'styles'}));
// });

// gulp.task('fonts', function() {
//     return gulp.src('src/fonts/**/*')
//         .pipe(gulp.dest('dest/fonts'))
//         .pipe($.size({ title: 'fonts' }));
// });

gulp.task('img', function() {
    return gulp.src('src/img/**/*')
        .pipe(gulp.dest('dest/img'))
        .pipe($.size({ title: 'img' }));
});

// gulp.task('layoutImg', function() {
//     return gulp.src('src/layoutImg/**/*')
//         .pipe(gulp.dest('dest/layoutImg'))
//         .pipe($.size({ title: 'layoutImg' }));
// });

gulp.task('js', function () {
    return gulp.src('src/js/*')
        .pipe(gulp.dest('dest/js'))
        .pipe($.size({ title: 'js' }));
});


gulp.task('templates', function() {

    return gulp.src('src/*.php')
        .pipe(gulp.dest('dest'))
        .pipe($.size({title: 'template'}));
});
gulp.task('controller', function() {

    return gulp.src('src/controller/*.php')
        .pipe(gulp.dest('dest/controller'))
        .pipe($.size({title: 'template'}));
});
gulp.task('dao', function() {

    return gulp.src('src/dao/*.php')
        .pipe(gulp.dest('dest/dao'))
        .pipe($.size({title: 'template'}));
});
gulp.task('partial', function() {

    return gulp.src('src/partial/*.php')
        .pipe(gulp.dest('dest/partial'))
        .pipe($.size({title: 'template'}));
});
gulp.task('styles', function() {

    return gulp.src('src/css/*.css')
        .pipe(gulp.dest('dest/css'))
        .pipe($.size({title: 'template'}));
});



// gulp.task('robots', function() {
//     return gulp.src('src/robots.txt')
//         .pipe(gulp.dest('dest/'))
//         .pipe($.size({ title: 'robots' }));
// });
// gulp.task('htaccess', function() {
//     return gulp.src('src/.htaccess')
//         .pipe(gulp.dest('dest/'))
//         .pipe($.size({ title: 'htaccess' }));
// });


gulp.task('watch', function () {

    browserSync({
        notify: false,
        proxy: 'dev.blog.dev'
    });


    $.watch('src/css/**/*', function(){
        gulp.start(['styles'], reload);
    });

    $.watch('src/*.php', function(){
        gulp.start(['templates'], reload);
    });

    $.watch('src/controller/*.php', function(){
        gulp.start(['controller'], reload);
    });

    $.watch('src/dao/*.php', function(){
        gulp.start(['dao'], reload);
    });

    $.watch('src/partial/*.php', function(){
        gulp.start(['partial'], reload);
    });

    // $.watch('src/fonts/**/*', function(){
    //     gulp.start(['fonts'], reload);
    // });
    $.watch('src/img/**/*', function(){
        gulp.start(['img'], reload);
    });
    // $.watch('src/layoutImg/**/*', function(){
    //     gulp.start(['layoutImg'], reload);
    // });
    $.watch('src/js/**/*', function(){
        gulp.start(['js'], reload);
    });

    var fileWatcher = $.watch('src/**/*').on('unlink', function(currentPath){
        var filePathFromSrc = path.relative(path.resolve('src'), currentPath);
        var destFilePath = path.resolve('dest', filePathFromSrc).replace('templates/', '');
        del.sync(destFilePath);
        console.log('File removed - ' + destFilePath);
    });

    // $.watch('src/robots.txt', function(){
    //     gulp.start(['robots'], reload);
    // });
    // $.watch('src/.htaccess', function(){
    //     gulp.start(['htaccess'], reload);
    // });
});


gulp.task('start', ['styles', 'templates', 'controller', 'partial', 'dao', 'img', 'js']);
