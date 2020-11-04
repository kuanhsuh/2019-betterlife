const purgecss = require("@fullhuman/postcss-purgecss");
const autoprefixer = require("autoprefixer");
const cssnano = require('cssnano')

module.exports = {
  plugins: [
    require("tailwindcss"),
    purgecss({
      content: ["./**/*.php"],
      defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
    }),
    cssnano({
      preset: 'default'
    }),
    autoprefixer()
  ]
};
