module.exports = {
  plugins: [
    require('postcss-import'),
    require('postcss-cssnext')({
      features: {
        customProperties: false,
        colorHsl: false,
        rem: false
      }
    }),
    require('cssnano')({
      autoprefixer: false
    }),
  ]
}