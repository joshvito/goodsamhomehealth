module.exports = function(grunt) {

  grunt.initConfig({

  pkg: grunt.file.readJSON('package.json'),

	less: {
	  development: {
		files: {
		  "src/css/global.css": ["src/css/global.less"],
  		  "src/css/home-carousel.css": ["src/css/home-carousel.less"]
		  }
	  }
	},
	
  cssmin: {
    combine: {
      files: {
        'src/css/global.min.css': ['bower_components/bootstrap/dist/css/bootstrap.min.css','src/css/global.css']
      }
    }
  },

  jshint: {
    beforeconcat: ['src/js/*.js', '!src/js/min/*.js','!src/js/ie.js','!src/js/production.js']
  },

  concat: {
    distIE: {
      src: [
        'bower_components/bootstrap/assets/js/html5shiv.js',
	      'bower_components/bootstrap/assets/js/respond.min.js'
      ],
      dest: 'src/js/ie.js'
    },
    dist: {
      src: [
	  'bower_components/bootstrap/dist/js/bootstrap.min.js',
	  'bower_components/Squishy.js/jquery.squishy.js',
	  'bower_components/bootstrap/assets/js/respond.min.js'
      ],
      dest: 'src/js/production.js'
    }
  },

  uglify: {
    build: {
      files:{
		 'src/js/min/production.min.js': ['src/js/production.js'],
		 'src/js/min/ie.min.js': ['src/js/ie.js'],
		 'src/js/min/jquery.responsiveCarousel.min.js':['src/js/jquery.responsiveCarousel.js']
	}
    }
  },

  copy: {
    main: {
      expand: true,
      nonull:true,
      cwd: 'bower_components/Catch-All-PHP-Form-Processor/',
      src: ['*.php', '!sample*'],
      dest: 'src/scripts/',
      flatten:true
    },
  },

  watch: {

    scripts: {
      files: ['src/js/*.js', '!src/js/min/*.js'],
      tasks: ['jshint','concat', 'uglify'],
      options: {
        // spawn: false,
      }
    },
    css: {
      files: ['src/css/*.less'],
      tasks: ['less', 'cssmin'],
      options: {
        // spawn: false,
      }
    }
  },

  concurrent: {
    options: {
      logConcurrentOutput: true
    },
    dev: {
      tasks: ["watch:scripts", "watch:css"]
    }
  }


  });

  require('load-grunt-tasks')(grunt);

  // Default Task is basically a rebuild
  grunt.registerTask('default', ['concat', 'uglify', 'less', 'cssmin', 'copy']);

  grunt.registerTask('dev', ['concurrent']);

};