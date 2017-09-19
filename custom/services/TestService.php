<?php

namespace dev\custom\services;

use craft\base\Component;

/**
 * Class TestService
 */
class TestService extends Component
{
    public function myMethod($item, $index)
    {
        var_dump($item);
        var_dump($index);
    }
}
