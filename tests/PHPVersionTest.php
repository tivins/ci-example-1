<?php

class PHPVersionTest extends \PHPUnit\Framework\TestCase
{
    public function testPhpVersion()
    {
        $this->assertEquals([8,1], \Sample\SimpleClass::getPHPVers());
    }
}