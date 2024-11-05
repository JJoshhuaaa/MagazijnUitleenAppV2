const mix = require('laravel-mix');

// Combine CSS files
mix.combine([
    'resources/css/header.css',
    'resources/css/index.css',
], 'public/css/all.css')
.version(); // Enable versioning for cache busting

// Compile JavaScript files
mix.js([
    'resources/js/header.js',
], 'public/js/all.js');