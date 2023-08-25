const path = require('path');
const NodePolyfillPlugin = require('node-polyfill-webpack-plugin');
const miniCss = require('mini-css-extract-plugin');

module.exports = {
  mode: 'development',
  entry: path.resolve(__dirname, './src/js/index.js'),
  output: {
    path: path.resolve(__dirname, 'build'),
    filename: 'scripts.js'
  },
  module: {
    rules: [{
      test: /\.(s*)css$/,
      use: [
        miniCss.loader,
        'css-loader',
        'sass-loader',
        'postcss-loader'
      ]
    }]
  },
  plugins: [
    new NodePolyfillPlugin(),
    new miniCss({
      filename: 'style.css',
    }),
  ]
};