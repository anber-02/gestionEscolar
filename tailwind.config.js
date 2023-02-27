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
        'pattern': "url('/img/patron.png)"
      },
      fontSize: {
        '3xl': '2.2rem',
        '4xl': '2.441rem',
        '5xl': '3.052rem',
      }, 
      boxShadow: {
        'x': '.1rem .1rem .4rem .05rem rgba(0,0,0,.5)'
      }
    },
  },
  plugins: [],
}
