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
                bgColor:'##f0f0f0',
                bgColor:'#f0f0f0',
                listColor:'#8e8e8e',
                listBorderColor:'#dbdbdb',
                footerBg:'#252525'
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
            fontSize:{
                logoSize:'1.32rem',
                primarySize:'0.875rem',
                '8vh': '8vh',
                '3vh':'3vh',
                '2vh':'2vh',
                '4vh':'4vh',
                '16vh':'16vh',
                '10vh':'10vh',
                '18vh':'18vh',
                '14vh':'14vh',
                '15.4vh':'15.4vh'
            },
            fontWeight:{
                logoBold:'600',
                h3Bold:'500',
                h1Bold:'800'
            },
            keyframes: {
                'move-down': {
                  '80%': { opacity: '0.5' },
                  '100%': { transform: 'translateY(1.3em)', opacity: '0' },
                },
                'mouse-down': {
                  '100%': { transform: 'translateY(2.3em)' },
                },
              },
              animation: {
                'move-down': 'move-down 2s infinite',
                'mouse-down': 'mouse-down 2s infinite',
              },
        },
    },
    plugins: [],
};
