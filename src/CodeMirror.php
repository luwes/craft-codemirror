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
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\services\Fields;
use craft\events\RegisterComponentTypesEvent;

use yii\base\Event;

use luwes\codemirror\fields\CodeMirrorField;

/**
 * Class CodeMirror
 *
 * @author    Wesley Luyten
 * @package   CodeMirror
 * @since     1.0.0
 *
 */
class CodeMirror extends Plugin
{
	// Static Properties
	// =========================================================================

	/**
	 * @var CodeMirror
	 */
	public static $plugin;

	// Public Methods
	// =========================================================================

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();
		self::$plugin = $this;

		Event::on(
			Fields::className(),
			Fields::EVENT_REGISTER_FIELD_TYPES,
			function (RegisterComponentTypesEvent $event) {
				$event->types[] = CodeMirrorField::class;
			}
		);

		Event::on(
			Plugins::className(),
			Plugins::EVENT_AFTER_INSTALL_PLUGIN,
			function (PluginEvent $event) {
				if ($event->plugin === $this) {
				}
			}
		);

		Craft::info('CodeMirror ' . Craft::t('codemirror', 'plugin loaded'), __METHOD__);
	}

	// Protected Methods
	// =========================================================================

}
