const markdownIt = require('markdown-it');
const markdownItFootnote = require('markdown-it-footnote');
const syntaxHighlight = require('@11ty/eleventy-plugin-syntaxhighlight');

let markdownLibrary = markdownIt({
  html: true,
  breaks: true,
  linkify: true,
  typographer: true,
})
.use(markdownItFootnote);

module.exports = function(config) {
  config.addNunjucksFilter('timestamp', path => `${path}?v=${Date.now()}`);
  config.addPlugin(syntaxHighlight);
  config.addPassthroughCopy({ 'CNAME': 'CNAME' });
  config.addPassthroughCopy({ 'src/assets/favicon': 'public/favicon' });
  config.addPassthroughCopy({ 'src/assets/images': 'public/images' });
  config.addPassthroughCopy({ 'src/public': 'public' });
  config.addWatchTarget('./src/assets/css');
  config.setLibrary('md', markdownLibrary);
  config.setUseGitIgnore(false);

  return {
    dir: {
      includes: '_includes',
      input: 'src',
      layouts: '_layouts',
      output: 'dist',
    },
    htmlTemplateEngine: 'njk',
    templateFormats: [
      'html',
      'md',
      'njk',
    ],
  };
};
