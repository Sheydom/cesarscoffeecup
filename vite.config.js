import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: true,
        cors: true,
        port: 5173,
        hmr: {
            host: "172.16.0.11",
        },
        watch: {
            ignored: ["**/storage/framework/views/**"],
        },
    },
});
