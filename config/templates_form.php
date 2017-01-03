<?php
$config = [
    'Templates' => [
        'loginForm' => [
            'input' => '<input class="form-control" type="{{type}}" name="{{name}}" {{attrs}} />',
            'inputContainer' => '<div class="form-group has-feedback">{{content}}</div>',
            'inputContainerError' => '<div class="form-group has-error">{{content}}{{error}}</div>',
            'error' => '<span class="help-block">{{content}}</span>'
        ],
        'profileForm' => [
            'label' => '',
            'input' => '<input class="form-control" type="{{type}}" name="{{name}}" {{attrs}} />',
            'inputContainer' => '{{content}}',
            'inputContainerError' => '<div class="form-group has-error">{{content}}{{error}}</div>',
            'error' => '<span class="help-block">{{content}}</span>',
            'select' => '<div class="col-sm-2"><select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'file' => '<input type="file" class="form-control" name="{{name}}"{{attrs}}>',
        ],
        'addressForm' => [
            'label' => '<label{{attrs}}>{{text}}</label>',
            'input' => '<input class="form-control" type="{{type}}" name="{{name}}" {{attrs}} />',
            'inputContainer' => '<div class="form-group has-feedback">{{content}}</div>',
            'inputContainerError' => '<div class="form-group has-error">{{content}}{{error}}</div>',
            'error' => '<span class="help-block">{{content}}</span>',
            'submitContainer' => '{{content}}'
        ]
    ]
];
