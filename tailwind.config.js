/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend:{
            colors: {

                'Apple': '#7AB628',
                'Forestgreen': '#5A962C',
                'CalPolygreen': '#304A1C',
                'EnglishViolet': '#4D4E6A',
                'YinMnBlue': '#005293',
                'ProcessCyan': '#21BBEF',
                'Cadetgray': '#A4B1BA',
                'Frenchgray': '#ACB8C0',
                'Platinum': '#D0D6DB'
            },
        }

    },
    plugins: [

    ]

}

/** @type {import('tailwindcss').Config} */
/**
 *

 module.exports = {
 theme: {
 screens: {
 'sm': {'min': '640px', 'max': '767px'},
 // => @media (min-width: 640px and max-width: 767px) { ... }

 'md': {'min': '768px', 'max': '1023px'},
 // => @media (min-width: 768px and max-width: 1023px) { ... }

 'lg': {'min': '1024px', 'max': '1279px'},
 // => @media (min-width: 1024px and max-width: 1279px) { ... }

 'xl': {'min': '1280px', 'max': '1535px'},
 // => @media (min-width: 1280px and max-width: 1535px) { ... }

 '2xl': {'min': '1536px'},
 // => @media (min-width: 1536px) { ... }
 },
 }
 }
 */
