angular
    .module('larakit.form')
    .component('formfieldQuill', {
        templateUrl: '/packages/larakit/sf-angular-quilljs/larakit.form/formfield-quill.html',
        transclude: true,
        bindings: {
            error: '=',
            desc: '=',
            frmLabel: '=',
            max: '=',
            min: '=',
            model: '=',
            theme: '=',
            cssClass: '='
        },
        controller: function () {
            !this.theme ? this.theme = 'snow' : this.theme;
            !this.cssClass ? this.cssClass = 'default' : this.cssClass;
        }
    });