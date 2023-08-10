const mix = require('laravel-mix');

mix.sass('resources/scss/app.scss', 'dist/')
    .version();