module.exports = {
  plugins: [
    require('postcss-import'),
    require('postcss-nested'),
    // require('css-prefers-color-scheme'),
    require('cssnano')({
      autoprefixer: true
    }),
  ]
}