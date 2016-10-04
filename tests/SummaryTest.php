<?php

use Ozgurky\Summary\Summary;

class SummaryTest extends PHPUnit_Framework_TestCase
{
    public function testSummarize()
    {
        $text = str_repeat('hello_', 10);
        $expected = 'hello_hello_hello_hello_hello_hello_hello_hello_he';
        $summarized = Summary::summarize($text);

        $this->assertEquals(50, strlen($summarized));
        $this->assertEquals($expected, $summarized);
    }
}
