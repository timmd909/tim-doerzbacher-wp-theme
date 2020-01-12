'use strict';

module.exports = function (grunt) {
  grunt.registerTask('libs:common', [
    'copy:font-awesome',
  ]);

  grunt.registerTask('libs', 'Build/copy library assets into place', [
    'libs:dev'
  ]);

  grunt.registerTask('libs:dev', 'Build/copy development library assets into place', [
    'libs:common',
    'copy:bootstrap-dev',
  ]);

  grunt.registerTask('libs:prod', 'Build/copy production library assets into place', [
    'libs:common',
    'copy:bootstrap-prod',
  ]);
};
