const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const JS_DIR = path.resolve( __dirname, './src/js' );
const BUILD_DIR = path.resolve( __dirname, 'build' );

const entry = {
    main: JS_DIR + '/main.js',
};

const output = {
    path: BUILD_DIR,
    filename: 'js/[name].js',
    clean: true,
};

const plugins = [
    new MiniCssExtractPlugin({
        filename: 'css/[name].css',
    }),
];

const rules = [
    {
        test: /\.js/,
        exclude: /node_modules/,
        use: [
            {
                loader: 'babel-loader',
                options: {
                    presets: [
                        [
                            "@babel/preset-env",
                        {
                            "targets": "> 0.25%, not dead",
                        }],
                    ],
                },
            },
        ],
    },
    {
        test: /\.s[ac]ss$/i,
        exclude: /node_modules/,
        use: [
            {
                loader: MiniCssExtractPlugin.loader,
            },
            {
                loader: 'css-loader',
                options: {
                    sourceMap: true,
                }
            },
            {
                loader: 'sass-loader',
            },
        ],
    },
    {
        test: /\.(png|jpg|svg|gif)$/i,
        generator: {
            filename: 'images/[name][ext]',
        },
        type: 'asset/resource',
    },
]

module.exports = {
    mode: 'development',

    devtool: 'source-map',

    entry: entry,

    output: output,

    module: {
        rules: rules,
    },

    plugins: plugins,
}
