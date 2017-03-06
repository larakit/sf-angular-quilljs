<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-quilljs')
    ->usePackage('larakit/sf-quilljs')
    ->usePackage('larakit/sf-angular')
    ->ngModule('ngQuill')
    ->setSourceDir('public')
    ->jsPackage('ng-quill.min.js')
;
