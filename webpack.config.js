const path = require('path');
const webpack = require("webpack");
module.exports = {
    mode: 'production',
    devtool: 'source-map',
    entry: './assets/js/register-employee/index.js',
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery"
        })
    ],
    output: {
        filename: 'register-employee.js',
        path: path.resolve(__dirname, 'dist')
    }
};