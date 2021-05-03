const path    = require('path');
const webpack = require("webpack");
//npm run build:watch
module.exports = {
    mode: 'production',
    devtool: 'source-map',
    entry: [
        // './assets/js/employee/update-profile/index.js',
        //'./assets/js/employee/registration/index.js',
        './assets/js/employee/view-employee-profile/index.js',
    ],
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery"
        })
    ],
    output: {
        // filename: 'update-employee-profile.js',
        //filename: 'register-employee.js',
        filename: 'view-employee-profile.js',
        path: path.resolve(__dirname, 'dist')
    }
};