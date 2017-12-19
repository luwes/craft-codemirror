<?php
/**
 * CodeMirror plugin for Craft CMS 3.x
 *
 * Add the awesome in-browser code editor CodeMirror as a field type.
 *
 * @link      https://wesleyluyten.com
 * @copyright Copyright (c) 2017 Wesley Luyten
 */
namespace luwes\codemirror;
use craft\base\Model;
use yii\web\JsExpression;

class Settings extends Model
{
    /**
     * @var array The default jsOptions configuration.
     */
    public $jsOptions = [
        'theme' => 'default',
        'mode' => 'gfm',
        'lineNumbers' => true,
        'lineWrapping' => true,
        'viewportMargin' => '0',
    ];
    /**
     * @var array The modes configurations.
     */
    public $modes = [
        'xml',
        'htmlmixed',
        'javascript',
        'css',
        'markdown',
        'gfm',
    ];
    /**
     * @var array The addons configurations.
     */
    public $addons = [
        'mode/overlay', // needed for gfm (github flavored) mode
    ];
}
