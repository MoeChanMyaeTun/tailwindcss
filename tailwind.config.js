/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'background': 'url("/public/img/Background.png")',
        'background2' : 'url("/public/img/background2.png")',
        'background3' : 'url("/public/img/dots-01.png")'
      },
      inset: {
        'min': '-33px',
        '170px' : '170px',
      },
      letterSpacing: {
        '0.6em' : '0.6em'
      },
      padding:{
        '176px' : '176px',
        '752px' : '752px',
        '85px'  : '85px'
      },
      margin:{
        '170px' : '170px',
        '565px' : '565px',
        '87px'  : '87px',
      },
      width:{
        '749px' : '749px',
        '829px' : '829px',
        '600px' : '600px',
        '200px' : '200px',
        '400px' : '400px',
        '367px' : '367px'
      }
    },
    container: {
      screens: {
        mobile: "600px",
        tablet: "900px",
        desktop: "1280px",
      },
    },
  },
  plugins: [],
}

