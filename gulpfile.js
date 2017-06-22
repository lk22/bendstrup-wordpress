var elixir = require('laravel-elixir');
var sass = require('gulp-sass');

elixir((mix) => {
      mix.sass('./assets/sass/style.scss', './style.css');
});