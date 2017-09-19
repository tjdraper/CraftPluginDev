<?php

use dev\custom\Custom;

return [
    'aliases' => [
        '@dev' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'custom',
    ],
    'modules' => [
        'custom' => Custom::class,
    ],
    'bootstrap' => ['custom'],
];
