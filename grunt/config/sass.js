'use strict';

var FILES = {
  'inc/css/main.css': 'src/css/main.scss',
  // ...
};

module.exports = {
  options: {
    implementation: require('node-sass'),
    includePaths: [
      'node_modules/bootstrap/scss',
      'node_modules/font-awesome/scss',
      // ...
    ],
  },
  dev: {
    files: FILES,
    options: {
      style: 'nested',
    },
  },
  prod: {
    files: FILES,
    options: {
      sourceMap: true,
      outputStyle: 'compressed',
    },
  },
}
