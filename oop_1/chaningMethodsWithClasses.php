<?php

#
class Test
{
    public static $message = 'Hello';

    public static function concate()
    {
        self::$message .= " world";
        return Test::class;
    }
}

Test::concate()::concate();
// Test::concate();

echo Test::$message;
