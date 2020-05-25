
module.exports = (options) => {

    const { dev } = options;
    const hmr = HMR.getClient();

    return {
      /* All keys and values are below. */
      mode: dev ? 'development' : 'production',

      devtool: dev ? devtool : false,

      context: path.resolve(context),

      entry: {
        'styles/main': dev ? [hmr, entry.styles] : entry.styles,
        'scripts/main': dev ? [hmr, entry.scripts] : entry.scripts
      },

      output: {
        path: path.resolve(outputFolder),
        publicPath: getPublicPath(publicFolder),
        filename: '[name].js'
      },

    };
  }