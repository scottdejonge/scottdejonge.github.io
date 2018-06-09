module.exports = {
  plugins: [
    require('postcss-import'),
    require('postcss-cssnext')({
      features: {
        customProperties: false,
        rem: false
      }
    }),
    require('cssnano')({
      autoprefixer: false
    }),
  ]
}