import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'


export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.scss', './resource/js/app.js'],
            refresh: true,
        }),

    ],
    server: {
        port: 8000
    }
});
