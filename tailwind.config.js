const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                header: ['Raleway', ...defaultTheme.fontFamily.sans],
                sans: ['Raleway', ...defaultTheme.fontFamily.sans],
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
            },
            gridTemplateColumns: {
                "min-auto-1": "min-content auto",
                "auto-min-1": "auto min-content",
                "link-table": "min-content auto min-content min-content min-content"
            }
        }
    },

    plugins: [
    ],
};
