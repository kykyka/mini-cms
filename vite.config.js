import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: 'mini-cms.loc', // 👈 твой локальный домен
        port: 5173,
        cors: true,
        hmr: {
            host: 'mini-cms.loc',
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
