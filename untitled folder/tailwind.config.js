import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors:{
                primaryColor:'#f35151',
                bgColor:'#f0f0f0'
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
            fontSize:{
                logoSize:'1.32rem',
                primarySize:'0.875rem'
            },
            fontWeight:{
                logoBold:'600',
                h3Bold:'500'
            }
        },
    },
    plugins: [],
};
