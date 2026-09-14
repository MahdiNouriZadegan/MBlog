import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

               /* admin css styles */
                'resources/css/admin/comment.css',
                'resources/css/admin/index.css',
                'resources/css/admin/style.css',
                /* admin js scripts*/
                'resources/js/admin/change-status.js',
                'resources/js/admin/script.js'

            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
    resolve: {
        alias: {
            '~font-awesome': 'font-awesome',
        },
    },
});
