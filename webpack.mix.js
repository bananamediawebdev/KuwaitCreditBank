const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
require("laravel-mix-purgecss");

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sass("resources/sass/Style.scss", "public/css")
    .postCss("resources/sass/tw.css", "public/css")
    .js("node_modules/popper.js/dist/popper.js", "public/js")
    .js("node_modules/alpinejs/dist/alpine.js", "public/js")
    .js("resources/js/SlickCarousel.js", "public/js")
    .js("resources/js/Swup.js", "public/js")
    .sourceMaps()
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js"), require("autoprefixer")]
    })
    .purgeCss({
        enabled: mix.inProduction(),
        extensions: ["*"]
    });
