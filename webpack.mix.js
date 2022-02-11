const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const resources = 'resources';
const output = 'public';

mix.copy(`${resources}/img/`, `${output}/images`);
mix.copy(`${resources}/fonts/`, `${output}/fonts`);

mix.js(`${resources}/js/app.js`, `${output}/js`)
    .postCss(`${resources}/css/style.css`, `${output}/css`, [
        //
    ]).options({
});

