const path = require('path');
//const webpack = require('webpack');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
        },
    },
    plugins: [
       // new webpack.HotModuleReplacementPlugin()
    ],
};
