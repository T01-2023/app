const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
     content: [
          "./resources/**/*.blade.php",
          "./resources/**/*.js",
          "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
     ],
     theme: {
          extend: {
               fontFamily: {
                    sans: ['Inter var', ...defaultTheme.fontFamily.sans],
               },
          }
     },
     plugins: [
          require("@tailwindcss/forms")({
               // strategy: 'base', // only generate global styles
               strategy: 'class', // only generate classes
             }),
     ],
}

