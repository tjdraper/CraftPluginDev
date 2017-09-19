<?php

namespace dev\custom\controllers;

use craft\web\Controller;
use topshelfcraft\excelimport\ExcelImport;

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
        $service = new \dev\custom\services\TestService();
        var_dump($service);
        die;

        $helperService = ExcelImport::$plugin->helperService;
        $spreadsheetService = ExcelImport::$plugin->spreadsheetService;
        var_dump(
            $spreadsheetService->walkRows(
                "{$helperService->spreadsheetUploadPath}sample.xls",
                [
                    $this,
                    'testCallable'
                ]
            )
        );
        die;
    }

    /**
     * Test callable
     */
    public function testCallable($asdf, $as)
    {
        var_dump($asdf, $as);
        die;
    }
}
