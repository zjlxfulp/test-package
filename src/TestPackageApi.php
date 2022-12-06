<?php

namespace Fulp\TestPackage;

class TestPackageApi
{
    public static function getConfig() : array
    {
        return config('netease.music');
    }
}