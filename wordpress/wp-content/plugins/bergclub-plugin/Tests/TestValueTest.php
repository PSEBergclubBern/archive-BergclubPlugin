<?php

use PHPUnit\Framework\TestCase;

require('ExampleTestClasses/TestClass.php');

class TestValueTest extends TestCase
{
    /**
     * @ExampleTestClasses
     */
    public function testValue()
    {
        $testObject = new TestClass();
        $this->assertTrue(true);
        $this->assertRegExp('/foo/', 'bar foo');
        $this->assertRegExp("/Value/", $testObject->getTestValue());
    }
}
