var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // uncomment to create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())

    // uncomment for legacy applications that require $/jQuery as a global variable
    .autoProvidejQuery()

    // uncomment to define the assets of the project
    // .addEntry('js/jquery.scrollex.min', './assets/js/jquery.scrollex.min.js')
    // .addEntry('js/jquery.scrolly.min', './assets/js/jquery.scrolly.min.js')
    // .addEntry('js/skel.min', './assets/js/skel.min.js')
    // .addEntry('js/ie/respond.min', './assets/js/ie/respond.min.js')
    // .addEntry('js/ie/html5shiv', './assets/js/ie/html5shiv.js')
    // .addEntry('js/util', './assets/js/util.js')
    // .addEntry('js/main', './assets/js/main.js')
    //
    // .addStyleEntry('css/main', './assets/css/main.css')
    // .addStyleEntry('css/ie9', './assets/css/ie9.css')
    // .addStyleEntry('css/ie8', './assets/css/ie8.css')
    // .addStyleEntry('css/font-awesome.min', './assets/css/font-awesome.min.css')

    // uncomment if you use Sass/SCSS files
    // .enableSassLoader()

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()
;

module.exports = Encore.getWebpackConfig();
