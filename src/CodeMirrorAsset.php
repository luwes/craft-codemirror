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

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Wesley Luyten
 * @package   CodeMirror
 * @since     1.0.0
 */
class CodeMirrorAsset extends AssetBundle
{
	// Public Methods
	// =========================================================================

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		$this->sourcePath = '@luwes/codemirror/assets';

		$this->depends = [
			CpAsset::class,
		];

		$this->js = [
			'lib/codemirror.js',
		];

		$this->css = [
			'lib/codemirror.css',
		];

		parent::init();
	}
}
