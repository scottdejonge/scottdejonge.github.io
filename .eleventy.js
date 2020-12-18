const eleventyNavigationPlugin = require('@11ty/eleventy-navigation');

module.exports = function(config) {
  config.setUseGitIgnore(false);
  config.addPlugin(eleventyNavigationPlugin);
  config.addNunjucksFilter('timestamp', path => `${path}?v=${Date.now()}`);
  config.addWatchTarget('./src/assets/css');
  config.addPassthroughCopy({ 'src/assets/favicon': 'public/favicon' });
  config.addPassthroughCopy({ 'src/assets/images': 'public/images' });
  config.addPassthroughCopy({ 'src/public': 'public' });

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
