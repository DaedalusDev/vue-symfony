const configureWebpack = require('./webpack.config.js')

const onProxyReq = (proxyReq) => {
  // Retire les headers pour accéder au app_dev.php
  proxyReq.removeHeader('x-forwarded-for')
}
const proxy =
  process.env.DEV_API_URL
    ? {
      '/api': {
        target: process.env.DEV_API_URL,
        onProxyReq
      },
      '/logout': {
        target: process.env.DEV_API_URL,
        onProxyReq
      }
    }
    : console.log('[PROXY] DISABLED - Configure ./.env and define DEV_API_URL')
module.exports = {
  // pluginOptions: {
  //   quasar: {
  //     theme: 'mat'
  //   }
  // },
  outputDir: '../web/build',
  baseUrl: process.env.NODE_ENV === 'production'
    ? './build/'
    : '/',
  lintOnSave: true,
  // webpack
  configureWebpack,
  devServer: {
    host: '127.0.0.1',
    proxy
  }
}
