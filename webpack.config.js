const path = require('path');

module.exports = [

    {
        mode: 'development',

        entry: {
            "theme": "./app/js/theme.js"
        },

        output: {
            path: path.resolve(__dirname, "./"),
            filename: "./app/bundle/[name].js"
        },

        module: {
            rules: [
                {
                    test: /\.js$/,
                    use: 'babel-loader'
                },
                {
                    test: /\.svg$/,
                    loader: 'svg-inline-loader'
                }
            ]
        }
    }

];