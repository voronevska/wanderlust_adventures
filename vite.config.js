import { defineConfig } from 'vite';
import { resolve } from 'path';
import laravel from 'laravel-vite-plugin';
import { createVuePlugin } from 'vite-plugin-vue2';

export default defineConfig({
  base: '/wanderlust_adventures/',
  plugins: [
    laravel({
      input: [
        'resources/views/home.blade.php',
        'resources/css/app.css',
        'resources/js/app.js'
      ],
      refresh: true,
    }),
    createVuePlugin(),
  ],
  build: {
    outDir: resolve(__dirname, 'dist'),
  },
});
