import { sentryVitePlugin } from "@sentry/vite-plugin";
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        sentryVitePlugin({
            org: "repeating-export-for-ynab",
            project: "repeating-export-for-ynab",
        }),
    ],

    build: {
        sourcemap: true,
    },
});
