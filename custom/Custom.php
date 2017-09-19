<?php

namespace dev\custom;

use yii\base\Module;
use dev\custom\controllers\TestController;

/**
 * Class Custom
 */
class Custom extends Module
{
    /** @var Custom $plugin */
    public static $instance;

    /** @var array $controllerMap */
    public $controllerMap = [
        'test' => TestController::class,
    ];

    /**
     * Initialize plugin
     */
    public function init()
    {
        parent::init();
        self::$instance = $this;
    }
}
