<?php

namespace dev\custom\controllers;

use craft\web\Controller;

/**
 * Class TestController
 */
class TestController extends Controller
{
    /** @var bool $allowAnonymous */
    protected $allowAnonymous = true;

    /**
     * Test Route
     * @return \yii\web\Response
     */
    public function actionTestRoute()
    {
        var_dump('here');
        die;
    }
}
