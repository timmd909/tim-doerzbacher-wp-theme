'use strict';

module.exports = function (grunt) {
  grunt.registerTask('prod', 'Build production ready assets', [
    'clean',
    'libs:prod',
    'sass:prod',
  ]);
};
