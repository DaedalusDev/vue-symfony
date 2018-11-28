const path = require('path')

module.exports = {
  // context: path.resolve(__dirname, './front'),
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src')
      //'quasar': path.resolve(__dirname, './node_modules/quasar-framework/dist/quasar.mat.esm.js')
    }
  }
}
