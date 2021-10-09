module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
        fill: {
            current: 'currentColor',
        },
        stroke: {
            current: 'currentColor',
        },
        transitionProperty: 'hover',
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/typography'),
  ],
}
