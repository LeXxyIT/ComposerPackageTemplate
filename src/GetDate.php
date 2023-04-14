<?php

namespace LeXxyIT\ComposerPackageTemplate;

class GetDate
{
    public function __construct()
    {
        echo date('d.m.Y H:i:s') . PHP_EOL;
    }
}
