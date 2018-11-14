<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:39
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/webpack.config.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7983954003_65246484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98f81b59c62d93feda9cdc07d6dd063c1c9d70fe' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/webpack.config.js',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7983954003_65246484 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
var path = require('path');
var webpack = require('webpack');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
  entry: [
    './js/theme.js'
  ],
  output: {
    path: path.resolve(__dirname, 'public'),
    filename: 'bundle.js'
  },
  //devtool: 'source-map', // uncomment me to build source maps (really slow)
  module: {
    loaders: [{
      test: path.join(__dirname, 'js'),
      loader: 'babel-loader',
      query: {
        presets: ['es2015']
      }
    }, {
      test: /\.(scss|sass)$/,
      use: ExtractTextPlugin.extract({
        fallback: 'style-loader',
        use: [
          {
            loader: 'css-loader',
            options: {
              minimize: true,
              //sourceMap: true, // uncomment me to generate source maps
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              //sourceMap: true, // uncomment me to generate source maps
            }
          },
          {
            loader: 'sass-loader',
            options: {
              //sourceMap: true, // uncomment me to generate source maps
            }
          }
        ]
      })
    }, {
      test: /.(gif|png|woff(2)?|eot|ttf|svg)(\?[a-z0-9=\.]+)?$/,
      loader: 'file-loader?name=[hash].[ext]'
    }]
  },
  plugins: [
    new ExtractTextPlugin('theme.css'),
    new webpack.optimize.UglifyJsPlugin({
      sourceMap: false,
      compress: {
        sequences: true,
        conditionals: true,
        booleans: true,
        if_return: true,
        join_vars: true,
        drop_console: true
      },
      output: {
        comments: false
      }
    })
  ]
};
<?php }
}
