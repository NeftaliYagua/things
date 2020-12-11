<?php

namespace LaravelSchema\Things;

class Things
{
    public function holamundo(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}