var path = require('path');

module.exports = [

    {
        entry: {
            //"SiteSettingTheme": "./app/components/SiteSettingTheme.vue",
            "node-theme": "./app/components/node-theme",
            "widget-theme": "./app/components/widget-theme",
            "uikit": "./app/uikit.js"
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        module: {
            loaders: [
                { test: /\.vue$/, loader: "vue" }
            ]
        },
        resolve: {
            alias: {
              CORE: path.resolve(__dirname, '../../sab/pagekit-extension-theme/app/components')
            }
        }
    }

];