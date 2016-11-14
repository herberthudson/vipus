<?php
$config = [
    'Templates' => [
        'loginForm' => [
            'input' => '<input class="form-control" type="{{type}}" name="{{name}}" {{attrs}} />',
            'inputContainer' => '<div class="form-group has-feedback">{{content}}</div>',
            'inputContainerError' => '<div class="form-group has-error">{{content}}{{error}}</div>',
            'error' => '<span class="help-block">{{content}}</span>'
        ]
    ]
];
