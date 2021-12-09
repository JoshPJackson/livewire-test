const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    variants: {
        extend: {
            pointerEvents: ['hover', 'focus']
        }
    },
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                header: ['Raleway', ...defaultTheme.fontFamily.sans],
                sans: ['OpenSans', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                purple: {
                    light: '#BB4DF0',
                    DEFAULT: '#6E00A3'
                },
                gray: {
                    200: '#f7f7f7'
                },
                success: colors.green["500"],
                warning: colors.orange["500"],
                danger: colors.red["500"],
                info: colors.blue["200"],
            },
            borderColor: theme => ({
                ...theme('colors'),
                DEFAULT: theme('colors.gray.300', 'currentColor'),
                purple: '#BB4DF0',
                success: colors.green["500"],
                warning: colors.orange['500'],
                danger: colors.red['500'],
                info: colors.blue['200']
            }),
            border: {
                'purple': '1px solid #BB4DF0 !important'
            }
        }
    },

    plugins: [
    ],
};
