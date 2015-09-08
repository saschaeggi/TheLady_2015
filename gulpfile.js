//*********** IMPORTS *****************
var gulp = require('gulp'),
	sass = require('gulp-sass'),
	watch = require('gulp-watch'),
	paths =  {
		scss: '.sass/*.scss'
	};


//Gulp compling my Sass files into CSS
gulp.task('sass', function (){
	 gulp.src('scss/*.scss')
		 .pipe(sass({includePaths: ['scss']}))	
	 	 .pipe(gulp.dest('css')); //save the css to this destination
});


//Gulp performing watch task
gulp.task('watch',['sass'], function(){
	gulp.watch('scss/*.scss', ['sass']);
});

//Gulp's default task
gulp.task('default',['watch']);