<?php
/**
 * Created by PhpStorm.
 * User: deyzerman
 * Date: 09.11.18
 * Time: 16:12
 */
require_once 'vendor/autoload.php';
require_once 'src/MyClass.php';

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    public function testPower()
    {
        $my = new MyClass();
        $this->assertEquals(8, $my->power(2, 3));
    }

    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer($a, $b)
    {
        $this->assertSame('first', $a);
        $this->assertSame('bug', $b);
    }
}

class OutputTest extends TestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        print 'baz';
    }
}