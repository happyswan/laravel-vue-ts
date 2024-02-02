import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/loader.scss', 'resources/js/app.ts'],
            refresh: true,
        }),
        vue()
    ],
});
