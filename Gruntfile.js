module.exports = function (grunt) {

    //load tasks from devDependencies within package.json
    require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});

    //because you can't abstract too much
    var vbav2Config = {
        jsCustom: 'js/vbaV2',
        jsLibraries: 'js/libraries',
        production: 'staging'
    }
    grunt.initConfig({

        vbav2: vbav2Config,

        clean: {
            // production: ['production/'] this either creates or deletes the directory
            production: {
                files: [{
                    dot: true,
                    src: ['<%=vbav2.production %>/*']
                }]
            }
        },

        concat: {
            vbav2: {
                src: [
                    '<%=vbav2.jsCustom %>/app.js',
                    '<%=vbav2.jsCustom %>/services/memberjson.js',
                    '<%=vbav2.jsCustom %>/services/storageservice.js',
                    '<%=vbav2.jsCustom %>/services/googlemap.js',
                    '<%=vbav2.jsCustom %>/filters/memberpagefilter.js',
                    '<%=vbav2.jsCustom %>/controllers/memberlist.js',
                    '<%=vbav2.jsCustom %>/controllers/memberpage.js',
                    '<%=vbav2.jsCustom %>/controllers/allmembermap.js',
                    '<%=vbav2.jsCustom %>/directives/bannerimage.js',
                    '<%=vbav2.jsCustom %>/directives/backbutton.js',
                    '<%=vbav2.jsCustom %>/directives/showsocial.js',
                    '<%=vbav2.jsCustom %>/directives/membermap.js',
                    '<%=vbav2.jsCustom %>/directives/allmembermap.js'
                ],
                dest: '<%=vbav2.production %>/js/vbaV2/vbav2.min.js'
            },
            angular: {
                src: [
                '<%=vbav2.jsLibraries %>/angular/angular.min.js',
                '<%=vbav2.jsLibraries %>/angular-animate/angular-animate.min.js',
                '<%=vbav2.jsLibraries %>/angular-touch/angular-touch.min.js'
                ],
                dest: '<%=vbav2.production %>/js/libraries/all-angular.min.js'
            }
        },

        // Put files not handled in other tasks here
        copy: {
            production: {
                files: [{
                    expand: true,
                    dot: false,
                    dest: '<%=vbav2.production %>',
                    src: [
                        '*.php',
                        // 'inc/*', //solved by tweaking functions.php
                        // 'languages/*', //solved by tweaking functions.php
                        'style.css',
                        // 'js/libraries/angular/angular.min.js',
                        'fonts/*',
                        'images/*',
                        'data/*'
                    ]
                }]
            }
        }

    }); //end initConfig

    //register tasks here
    grunt.registerTask('build', [
        'clean:production',
        'concat:vbav2',
        'concat:angular',
        // 'ngmin',
        'copy:production'
        //  'cssmin',
        //  'rev'
     ]);


}; //end grunt function