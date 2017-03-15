<?php
/**
 * CodeMirror plugin for Craft CMS 3.x
 *
 * Add the awesome in-browser code editor CodeMirror as a field type.
 *
 * @link      https://wesleyluyten.com
 * @copyright Copyright (c) 2017 Wesley Luyten
 */

use yii\web\JsExpression;

/**
 * CodeMirror config.php
 *
 * Completely optional configuration settings for CodeMirror if you want to customize some
 * of its more esoteric behavior, or just want specific control over things.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'codemirror.php' and make
 * your changes there.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as well, so you can
 * have different settings groups for each environment, just as you do for 'general.php'
 */

return [
	"jsOptions" => [
		"theme" => "default",
		"mode" => "gfm",
		"lineNumbers" => true,
		"lineWrapping" => true,
		"viewportMargin" => new JsExpression('Infinity'),
	],
];
