'use strict';

module.exports = {
  'font-awesome': {
    src: 'node_modules/font-awesome/fonts/*',
    dest: 'inc/fonts/',
    flatten: true,
    expand: true,
  },
  'bootstrap-dev': {
    files: {
      'inc/js/bootstrap.js': 'node_modules/bootstrap/dist/js/bootstrap.js'
    }
  },
  'bootstrap-prod': {
    files: {
      'inc/js/bootstrap.js': 'node_modules/bootstrap/dist/js/bootstrap.min.js'
    }
  },
};
