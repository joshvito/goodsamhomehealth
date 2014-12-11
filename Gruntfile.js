module.exports = function(grunt) {

  grunt.initConfig({

  pkg: grunt.file.readJSON('package.json'),

	less: {
	  development: {
		files: {
		  "home-2013/src/css/global.css": ["home-2013/src/css/global.less"],
  		  "home-2013/src/css/home-carousel.css": ["home-2013/src/css/home-carousel.less"]
		  }
	  }
	},
	
  cssmin: {
    combine: {
      files: {
        'home-2013/src/css/global.min.css': ['bower_components/bootstrap/dist/css/bootstrap.min.css','home-2013/src/css/global.css']
      }
    }
  },

  jshint: {
    beforeconcat: ['home-2013/src/js/*.js', '!home-2013/src/js/min/*.js','!home-2013/src/js/ie.js','!home-2013/src/js/production.js']
  },

  concat: {
    distIE: {
      src: [
        'bower_components/bootstrap/assets/js/html5shiv.js',
	      'bower_components/bootstrap/assets/js/respond.min.js'
      ],
      dest: 'home-2013/src/js/ie.js'
    },
    dist: {
      src: [
	  'bower_components/bootstrap/dist/js/bootstrap.min.js',
	  'bower_components/Squishy.js/jquery.squishy.js',
	  'bower_components/bootstrap/assets/js/respond.min.js'
      ],
      dest: 'home-2013/src/js/production.js'
    }
  },

  uglify: {
    build: {
      files:{
		 'home-2013/src/js/min/production.min.js': ['home-2013/src/js/production.js'],
		 'home-2013/src/js/min/ie.min.js': ['home-2013/src/js/ie.js'],
		 'home-2013/src/js/min/jquery.responsiveCarousel.min.js':['home-2013/src/js/jquery.responsiveCarousel.js']
	}
    }
  },

  copy: {
    main: {
      expand: true,
      nonull:true,
      cwd: 'bower_components/Catch-All-PHP-Form-Processor/',
      src: ['*.php', '!sample*'],
      dest: 'home-2013/src/scripts/',
      flatten:true
    },
  },

  watch: {

    scripts: {
      files: ['home-2013/src/js/*.js'],
      tasks: ['jshint','concat', 'uglify'],
      options: {
        spawn: false,
      }
    },
    css: {
      files: ['home-2013/src/css/*.less'],
      tasks: ['less', 'cssmin'],
      options: {
        spawn: false,
      }
    }
  }


  });

  require('load-grunt-tasks')(grunt);

  // Default Task is basically a rebuild
  grunt.registerTask('default', ['concat', 'uglify', 'less', 'cssmin', 'copy']);

  grunt.registerTask('dev', ['watch']);

};