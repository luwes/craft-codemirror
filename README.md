# CodeMirror plugin for Craft CMS 3.x

Add the awesome in-browser code editor CodeMirror as a field type.

![Screenshot](resources/img/codemirror-screenshot.png)

## Installation

To install CodeMirror, follow these steps:

1. Install with Composer via `composer require luwes/craft3-codemirror`
2. Install plugin in the Craft Control Panel under Settings > Plugins

CodeMirror works on Craft 3.x.

## CodeMirror Overview

https://github.com/codemirror/codemirror

## Configuring CodeMirror

Copy the code below, create a file named `code-mirror.php` and place it in the craft config folder to override the default options.

``` php
return [
    'jsOptions' => [
        'theme' => 'default',
        'lineNumbers' => true,
        'lineWrapping' => true,
        'viewportMargin' => new JsExpression('Infinity'),
    ],
    'modes' => [
        'gfm', // the first mode is enabled by default
        'markdown',
        'htmlmixed',
        'javascript',
        'css',
        'xml',
    ],
    'addons' => [
        'mode/overlay', // needed for gfm (github flavored) mode
    ]
];
```

Brought to you by [Wesley Luyten](https://wesleyluyten.com)
