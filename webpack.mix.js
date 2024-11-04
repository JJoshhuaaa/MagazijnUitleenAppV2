const mix = require('laravel-mix');

mix.combine([
    'resources/css/header.css',
    'resources/css/index.css',
], 'public/css/all.css')
.version();
