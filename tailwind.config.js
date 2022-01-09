const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'cyan': {
                    DEFAULT: '#35858B',
                    '50': '#9ED6DA',
                    '100': '#8FCFD4',
                    '200': '#71C3C9',
                    '300': '#54B6BE',
                    '400': '#40A1A9',
                    '500': '#35858B',
                    '600': '#265E62',
                    '700': '#16373A',
                    '800': '#071011',
                    '900': '#000000'
                  },
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            height: theme => ({
                "screen/2": "50vh",
                "screen/3": "calc(100vh / 3)",
                "screen/4": "calc(100vh / 4)",
                "screen/5": "calc(100vh / 5)",
              }),
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
    ],
};
