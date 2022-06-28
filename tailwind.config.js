const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    prefix: 'sqmsr-',
    content: [
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
    corePlugins: {
        preflight: false,
    }
};