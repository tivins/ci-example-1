<?php

class PHPVersionTest extends \PHPUnit\Framework\TestCase
{
    public function testPhpVersion()
    {
        $this->assertEquals([7,4], \Sample\SimpleClass::getPHPVers());
    }
}