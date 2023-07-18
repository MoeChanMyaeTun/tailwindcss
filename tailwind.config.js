/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'background': 'url("/public/img/Background.png")',
      },
      inset: {
        'min': '-33px',
      },
      letterSpacing: {
        '0.6em' : '0.6em'
      },
      padding:{
        '176px' : '176px'
      }
    },
    container: {
      screens: {
        mobile: "600px",
        tablet: "900px",
        desktop: "1200px",
      },
    },
  },
  plugins: [],
}

