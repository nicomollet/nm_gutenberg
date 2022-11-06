const gulp = require('gulp'),
	clean = require('gulp-clean'),
	concatCss = require('gulp-concat-css'),
	cssnano = require('gulp-cssnano'),
	rename = require('gulp-rename');

const sass = require('gulp-sass')(require('sass'));

//compile and watch gulp.task(‘sass:watch’, function() { gulp.watch(‘app/scss/app.scss’, [‘sass’]);});



gulp.task('watch', function () {
	gulp.watch(['assets/css/**/*.css']).on(
		'change',
		gulp.series(
			'clean-shared',
			'clean-blocks',
			'minify-shared',
			'minify-blocks'
		)
	);
	gulp.watch(['assets/css/sass/*.scss']).on(
		'change',
		gulp.series(
			'sass',

		)
	);
	//gulp.watch('assets/sass/*.scss', ['sass']);

});
// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
	return gulp.src("assets/css/sass/app.scss")
	  .pipe(sass().on('error', sass.logError))
	  .pipe(gulp.dest("assets/css"));
  });



gulp.task('clean-shared', function () {
	return gulp.src('assets/css/style-shared.min.css', {
			read: false,
			allowEmpty: true,
		})
		.pipe(clean());
});

gulp.task('clean-blocks', function () {
	return gulp.src('assets/css/blocks/*.min.css', {
			read: false,
			allowEmpty: true,
		})
		.pipe(clean());
});

gulp.task('minify-shared', function () {
	return gulp.src('assets/css/*.css')
		.pipe(concatCss('style-shared.min.css'))
		.pipe(cssnano())
		.pipe(gulp.dest('assets/css/'));
});

gulp.task('minify-blocks', function () {
	return gulp.src('assets/css/blocks/*.css')
		.pipe(cssnano())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('assets/css/blocks'));
});

gulp.task(
	'default',
	gulp.series(
		'sass'
	),
	gulp.series(
		'clean-shared',
		'clean-blocks',
		'minify-shared',
		'minify-blocks'
	)
);
