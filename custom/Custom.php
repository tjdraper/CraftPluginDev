<?php

namespace dev\custom;

use yii\base\Module;
use dev\custom\controllers\TestController;

/**
 * Class Custom
 */
class Custom extends Module
{
    /** @var array $controllerMap */
    public $controllerMap = [
        'test' => TestController::class,
    ];
}
