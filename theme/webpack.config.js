const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  plugins: [new MiniCssExtractPlugin()],
  devServer: {
    contentBase: '.',
  },
  output: {
    publicPath: "/wp-content/themes/mrlini/dist/",
  },
  module: {
    rules: [{
        test: /\.s[ac]ss$/i,
        use: [
	  MiniCssExtractPlugin.loader,
          //'style-loader',
          'css-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        use: [
          'file-loader',
        ],
      },
    ],
  },
}
