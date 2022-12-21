let mix = require("laravel-mix");
let info = require("./package.json");

mix.setPublicPath("./assets/");

/**
 * [01]- Compile Assets files
 * [02]- Start Browsersync
 * [03]- Disable annoying notifications [Success messages only]
 */

mix.js(`src/js/${info.name}.js`, "assets/js")
    .sass(`src/scss/${info.name}.scss`, "assets/css")
    .browserSync({
        proxy: `http://${info.name}.project/`,
    })
    .disableSuccessNotifications();

// Add source map and versioning to assets in production environment.
if (mix.inProduction()) {
    mix.sourceMaps().version();
}
