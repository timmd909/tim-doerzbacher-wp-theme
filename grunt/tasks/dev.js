'use strict';

module.exports = function (grunt) {
  grunt.registerTask('dev', 'Build development assets', [
    'clean',
    'sass:dev',
  ]);
};
