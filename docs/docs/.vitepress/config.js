module.exports = {
  title: 'Connect Plugin Documentation',
  description: 'Documentation for the Connect plugin',
  base: '/docs/connect/',
  lang: 'en-US',
  head: [
    ['meta', {content: 'https://github.com/nystudio107', property: 'og:see_also',}],
    ['meta', {content: 'https://twitter.com/nystudio107', property: 'og:see_also',}],
    ['meta', {content: 'https://youtube.com/nystudio107', property: 'og:see_also',}],
    ['meta', {content: 'https://www.facebook.com/newyorkstudio107', property: 'og:see_also',}],
  ],
  themeConfig: {
    repo: 'nystudio107/craft-connect',
    docsDir: 'docs/docs',
    docsBranch: 'v1',
    algolia: {
      appId: 'NFTSURBI40',
      apiKey: '0dacf711d8ebc991d68d68e04289a383',
      indexName: 'nystudio107-connect'
    },
    editLinks: true,
    editLinkText: 'Edit this page on GitHub',
    lastUpdated: 'Last Updated',
    sidebar: 'auto',
  },
};
