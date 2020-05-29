
const webpack = require('webpack');
const path = require('path');

// include the js minification plugin
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

// include the css extraction and minification plugins
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
  entry: [
    './js/src/app.js', 
    './css/src/app.scss'
  ],
  // for the JavaScript build
  output: {
    //filename: './js/build/app.min.[hash].js',
    filename: './js/build/app.min.js',
    path: path.resolve(__dirname)
  },
  module: {
    rules: [
      // perform js babelization on all .js files
      {
        test: /\.js|jsx$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: [
              '@babel/preset-env', 
              '@babel/preset-react'
            ]
         }
        }
      },
      // compile all .scss files to plain old css
      {
        test: /\.s?[ac]ss$/,
        use: [
          MiniCssExtractPlugin.loader, 
          'css-loader', 
          'sass-loader'
        ]
      },
      // load fonts
      {
        test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[name].[ext]',
              useRelativePaths: true,
              outputPath: './assets/fonts/',
              publicPath: '../../assets/fonts',
            }
          }
        ]
      },
      // load images
      {
        test: /\.(png|jpe?g|gif)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              context: path.resolve(__dirname, 'src/'),
              useRelativePaths: true,
              outputPath: 'images',
              publicPath: '../../images',
            },
          },
        ],
      },
    ]
  },
  plugins: [
    // extract css into dedicated file
    new MiniCssExtractPlugin({
        filename: './css/build/main.min.css'
    })
  ],
  optimization: {
    minimizer: [
      // enable the js minification plugin
      new UglifyJSPlugin({
        cache: true,
        parallel: true
      }),
      // enable the css minification plugin
      new CleanWebpackPlugin(
        {
          cleanStaleWebpackAssets: false,
          // default: []
          cleanAfterEveryBuildPatterns: [
            './js/build/*',
            './css/build/*'
          ]
        }
      ),
    ]
  }
};
