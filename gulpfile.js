//* Adicionar os módulos instalados
const gulp = require('gulp')
const sass = require('gulp-sass')
const autoPrefixer = require('gulp-autoprefixer')
const concat = require('gulp-concat')
const uglify = require('gulp-uglify')
const babel = require('gulp-babel')
// const rename = require('gulp-rename')

//* Função para compilar o Sass em CSS comprimido,
//* adicionando os prefixos.
function compileMinSass() {
  return gulp
    .src('css/scss/**/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoPrefixer({ cascade: false, flexbox: true }))
    .pipe(gulp.dest('./'))
  // .pipe(rename('style.min.css'))
}
function compileSass() {
  return gulp
    .src('css/scss/**/*.scss')
    .pipe(sass())
    .pipe(autoPrefixer({ cascade: false, flexbox: true }))
    .pipe(gulp.dest('css/'))
}

//* Função para unir os arquivos JS em um só, aplicar o Babel
//* e depois aplicar o Uglify.
function compileMinJS() {
  return gulp
    .src('js/modules/*.js')
    .pipe(concat('script.min.js'))
    .pipe(babel({ presets: ['@babel/preset-env'] }))
    .pipe(uglify())
    .pipe(gulp.dest('js/'))
}
function compileJS() {
  return gulp
    .src('js/modules/*.js')
    .pipe(concat('script.js'))
    .pipe(gulp.dest('js/'))
}

function compilePlugins() {
  return gulp
    .src('js/plugins/*.js')
    .pipe(concat('plugins.min.js'))
    .pipe(gulp.dest('js/'))
}

//* Função simples de watch, que observa os arquivos
//* .scss e .js do projeto.
function watch() {
  gulp.watch('css/scss/**/*.scss', gulp.parallel(compileSass, compileMinSass))
  gulp.watch('js/modules/*.js', gulp.parallel(compileJS, compileMinJS))
  gulp.watch('js/plugins/*.js', compilePlugins)
}

//* Definição das tarefas: gulp <nome da tarefa>
exports.minSass = compileMinSass
exports.sass = compileSass
exports.js = compileJS
exports.minJS = compileMinJS
exports.plugins = compilePlugins
exports.watch = watch
exports.default = gulp.parallel(
  this.watch,
  this.minSass,
  this.sass,
  this.minJS,
  this.js,
  this.plugins
)
