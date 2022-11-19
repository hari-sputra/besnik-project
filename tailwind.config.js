/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
  ],
    theme: {
        fontFamily: {
          'inter': 'Inter, sans-serif',
          'poppins': 'Poppins, sans-serif',
      },
    extend: {
        colors: {
            'black-color': '#111439',
            'dark-blue': '#425466',
            'dark-purple': '#231A36',
            'grey-color': '#B2B7BE',
            'cyan-color': '#426666',
            'purple-color': '#B33CDB',
            'dark-grey': '#42424A',
            'yellow-color': '#FBBA33',
            'pink-color': '#DE2879',
      },
    },
  },
  plugins: [],
}
