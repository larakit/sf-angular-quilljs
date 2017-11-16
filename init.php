<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-quilljs')
    ->usePackage('larakit/sf-quilljs')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->cssPackage('ng-quill.css')
    ->jsPackage('ng-quill.min.js')
;
