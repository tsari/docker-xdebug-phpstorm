<?php


class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testTrue()
    {
        $this->assertTrue(true);

    }

    public function testFalse()
    {
        $this->assertFalse(false);

    }
}