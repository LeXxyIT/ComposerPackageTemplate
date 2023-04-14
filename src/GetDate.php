<?php

declare(strict_types=1);

class GetDate
{
    public function __construct()
    {
        echo date('d.m.Y H:i:s') . PHP_EOL;
    }
}
