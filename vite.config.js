import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        strictPort: true
    },
    build: {
        manifest: true,
        outDir: 'public/build', // Ensure correct output directory
    },
    base: '/build/', // Ensuring correct asset paths
});
