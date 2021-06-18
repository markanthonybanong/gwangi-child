const path    = require('path');
const webpack = require("webpack");
//npm run build:watch
module.exports = {
    mode: 'production',
    devtool: 'source-map',
    entry: [
        './assets/js/header/index.js'
        // './assets/js/employee/update-profile/index.js',
        // './assets/js/employee/register-employee/index.js',
        // './assets/js/employee/view-employee-profile/index.js',
        // './assets/js/employee/find-employee/index.js',
        //  './assets/js/employee/message-employee/index.js',
        // './assets/js/host-family/register-host-family/index.js',
        // './assets/js/host-family/update-host-family/index.js',
        // './assets/js/host-family/view-host-family-profile/index.js',
        //  './assets/js/host-family/find-host-family/index.js',
        //  './assets/js/host-family/message-host-family/index.js',
        //  './assets/js/message/message/index.js',
        //  './assets/js/message/messages/index.js',
    ],
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery"
        })
    ],
    output: {
        filename: 'header.js',
        // filename: 'update-employee-profile.js',
        // filename: 'register-employee.js',
        // filename: 'view-employee-profile.js',
        // filename: 'find-employee.js',
        // filename: 'message-employee.js',
        // filename: 'register-host-family.js',
        // filename: 'update-host-family-profile.js',
        // filename: 'view-host-family-profile.js',
        // filename: 'find-host-family.js',
        // filename: 'message-host-family.js',
        // filename: 'message.js',
        // filename: 'messages.js',
        path: path.resolve(__dirname, 'dist')
    }
};