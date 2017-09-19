<?php

use dev\custom\Custom;

return [
    'modules' => [
        'custom' => Custom::class,
    ],
    'bootstrap' => ['custom'],
];
