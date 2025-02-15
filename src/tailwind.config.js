import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'main': '#333333', // 文章 黒
            'white': '#FFFFFF', // 文章 白
            'primary': '#0078D7', // メイン背景 青
            'sub': '#E6E6E6', // サブ背景 シルバー
            'accent': '#00BFFF', // アクセント 水色
        },
    },

    plugins: [forms],
};
