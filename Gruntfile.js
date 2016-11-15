module.exports = function (grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        todo: {
            options:{
                marks: [
                    {
                        name: "INFO",
                        pattern: /INFO/,
                        color: "blue"
                    },
                    {
                        name: "TODO",
                        pattern: /TODO/,
                        color: "yellow"
                    },
                    {
                        name: "FIXME",
                        pattern: /FIXME/,
                        color: "orange"
                    }
                ],
                file: "TODO.md",
                githubBoxes: true,
                colophon: true,
                usePackage: true,
                title: "VipUS TODO/FIXME"
            },
            src: [
                'src/**/*', 'config/**/*', 'plugins/**/*', 'tests/**/*'
            ]
        }
    });

    grunt.loadNpmTasks('grunt-todo');

    grunt.registerTask('default', ['todo'])
};
