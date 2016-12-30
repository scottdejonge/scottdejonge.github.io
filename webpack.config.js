var path = require('path');
var webpack = require('webpack');
var postcss = require('postcss');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
  entry: {
    bundle: __dirname + '/assets/app.js',
  },
  output: {
    path: __dirname + '/dist',
    publicPath: '/',
    filename: '[name].js'
  },
  plugins: [
    new ExtractTextPlugin('[name].css'),
    new BrowserSyncPlugin({
      proxy: 'dev.scottdejonge',
      open: false
    }),
  ],
  module: {
    loaders: [
      {
        test: /\.css$/,
        loader: ExtractTextPlugin.extract('style-loader', 'css-loader!postcss-loader'),
        includes: [
          path.join(__dirname, 'assets/css'),
        ]
      },
      {
        test: /\.(eot|woff|woff2|ttf|svg|png|jpe?g|gif)(\?\S*)?/,
        loader: 'url?limit=8000&name=[name].[ext]'
      }
    ]
  },
  postcss: function (webpack) {
    return [
      require("postcss-import")(),
      require("postcss-cssnext")({
        features: {
          rem: false
        }
      }),
    ]
  }
};