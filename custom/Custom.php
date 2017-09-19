<?php

namespace dev\custom;

use Craft;
use yii\base\Module;
use dev\custom\controllers\TestController;
use craft\console\Application as ConsoleApplication;

/**
 * Class Custom
 */
class Custom extends Module
{
    /** @var Custom $plugin */
    public static $instance;

    /**
     * Initialize plugin
     */
    public function init()
    {
        parent::init();
        self::$instance = $this;
    }
}
