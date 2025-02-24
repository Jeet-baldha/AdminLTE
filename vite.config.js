import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/admin/js/app.js",

                "resources/admin/js/adminlte.js",

                "resources/css/app.css",
                "resources/js/app.js",

                "resources/admin/css/scss/adminlte.scss",
                "resources/admin/css/app.css",
            ],

            refresh: true,
        }),
    ],
});
