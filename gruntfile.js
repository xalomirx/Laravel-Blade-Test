/**
 * Created by mark on 13.05.18.
 */
module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        sass: {
            dist: {
                files: {
                    'public/css/style.css': 'resources/sass/style.scss'
                }
            }
        },
        watch: {
            source: {
                files: ['resources/sass/style.scss'],
                tasks: ['sass']
            }
        },
        cssmin: {
            style: {
                options: {
                    keepSpecialComments: 0,
                    report: 'gzip'
                },
                files: {
                    'public/css/style.min.css': ['public/css/style.css']
                }
            }
        }
    });

    grunt.registerTask('AllTasks', [
        'sass',
        'watch',
        'cssmin'
    ]);
};