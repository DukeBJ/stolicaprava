// webpack.mix.js

let mix = require('laravel-mix');

mix.setPublicPath('dist');

mix.copy('src/index.html', 'dist/index.html');

mix.js('src/js/app.js', 'dist/js').sourceMaps(true, 'source-map');
mix.sass('src/scss/app.scss','dist/css').sourceMaps(true, 'source-map');

mix.webpackConfig({
  devServer: {
    hot: true,
    liveReload: true,
    // inline: true,
    // contentBase: __dirname,
    // disableHostCheck: true,
    // watchContentBase: true,
    host: "localhost",
    open: false,
    port: 8080,
  },
})