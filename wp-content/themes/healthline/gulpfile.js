var gulp = require('gulp'),
    // connect = require('gulp-connect'),
    sass = require('gulp-sass');


// gulp.task('webserver', function() {
//     connect.server({
//         livereload: true,
//         root: [__dirname]
//     });
// });

gulp.task('sass', function() {
    gulp.src('/library/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('/library/css'));
        // .pipe(connect.reload());
});

gulp.task('watch', function() {
    gulp.watch('/library/scss/*.scss', ['sass']);
    // gulp.watch('./*.html', ['html']);
    // gulp.watch('./*.js', ['js']);
});

// gulp.task('html', function() {
//     gulp.src('./*.html')
//         .pipe(connect.reload());
// });

// gulp.task('js', function() {
//     gulp.src('./js/*.js')
//         .pipe(connect.reload());
// });

gulp.task('default', ['sass', 'watch']);
