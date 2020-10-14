module.exports = function(grunt){
const mozjpeg = require('imagemin-mozjpeg');
    
    grunt.initConfig({
    
        concat: {

            js: {
                src: ['js/*.js'],
                dest:'js/roster-scripts.js'
            },        

            css: {
                src: ['css/0-plugins/*'],
                dest:'css/style-wp.css'
            }

        },

        uglify: {
            js: {
                src: ['js/roster-scripts.js'],
                dest:'lib/scripts-min.js'
            }
        },

        cssmin: {
            css: {
                src: ['css/style.css'],
                dest:'css/style.min.css'
            }
        },

        imagemin: {
           
            dynamic: {

               options: {
                    optimizationLevel: 5,
                    svgoPlugins: [{removeViewBox: false}],
                    use: [mozjpeg()] 
                },
                files: [{
                    expand: true,
                    cwd: 'slike/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'slike/blog_optmized'
                }]

            },

        },

        sass: {
            dist: {
                src: 'app.scss',
                dest: 'css/style.css'

               
            }
        },


        // rename: {
        //   main: {
        //     files: [
        //         {src: ['galerija/optimized'], dest: 'galerija/optimized[pcelarstvo-knezevic]'},
        //         ]
        //   }
        // },
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-node-sass');
    // grunt.loadNpmTasks('grunt-contrib-rename');

};