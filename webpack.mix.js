// webpack.mix.js

let mix = require('laravel-mix');

mix.setPublicPath('dist');

mix.copy('src/index.html', 'dist/index.html');

mix.js('src/js/app.js', 'dist/js');
mix.sass('src/scss/app.scss','dist/css');