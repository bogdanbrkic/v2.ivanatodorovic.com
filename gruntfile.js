module.exports = function(grunt){

  "use strict";
  require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);


  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

//*************
    cssc: {
      build: {
        options: {
          consolidateViaDeclarations: true,
          consolidateViaSelectors:    true,
          consolidateMediaQueries:    true
        },
        files: {
          'build/css/master.css': 'build/css/master.css'
        }
      }
    },

    sass: {
      build: {
        files: {
          'build/css/master.css': 'css/sass/master.scss'
        }
      }
    },

    cssmin: {
      build: {
        src: 'build/css/master.css',
        dest: 'build/css/master.css'
      }
    },

//*************
    concat: {
        options: {
          separator: ';',
        },
        dist: {
          src: ['js/plugins.js', 'js/main.js'],
          dest: 'build/js/base.js',
        },
      },

    uglify: {
        build: {
            files: {
                'build/js/base.min.js': ['build/js/base.js']
            }
        }
    },


//*************
  //  watch: {

    //  css: {
    //    files: ['css/sass/*.scss'],
    //    tasks: ['buildcss']
      //},

    //   js: {
    //     files: ['build/js/base.js'],
    //     tasks: ['buildjs']
    // }
    //},



  });

  grunt.registerTask('default',   []);
  grunt.registerTask('buildcss',  ['sass', 'cssc', 'cssmin']);
  grunt.registerTask('buildjs',  ['concat', 'uglify']);

};
