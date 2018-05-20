module.exports = {
  plugins: [
    require('postcss-import'),
    require('postcss-cssnext')({
      features: {
        rem: false,
        customProperties: false
      }
    }),
    require('cssnano')({
      autoprefixer: false
    }),
  ]
}