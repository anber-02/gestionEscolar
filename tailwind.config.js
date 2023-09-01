/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'white' : '#FCFCFC'
      },
      backgroundImage: {
        'pattern': "url('http://localhost:8000/public/img/patron.png')"
      },
      fontSize: {
        '3xl': '2.2rem',
        '4xl': '2.441rem',
        '5xl': '3.052rem',
      }, 
      boxShadow: {
        'lg': '-1px -1px 4px -3px rgba(0,0,0,.8), 1px 0px 4px -3px rgba(0,0,0,.8) ',
      },
      width: {
        '1-43': '43%'
      }
    },
  },
  plugins: [],
}
// /img/perfil.png