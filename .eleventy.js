module.exports = function(config) {
  config.addNunjucksFilter('timestamp', path => `${path}?v=${Date.now()}`);
  config.addPassthroughCopy({ 'src/assets/favicon': 'public/favicon' });
  config.addPassthroughCopy({ 'src/assets/images': 'public/images' });
  config.addPassthroughCopy({ 'src/public': 'public' });
  config.addWatchTarget('./src/assets/css');
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
