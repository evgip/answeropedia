<?php

class DateTime_Humanizer__humanizeTimestamp__Test extends PHPUnit\Framework\TestCase
{
    public function test__zero_answer()
    {
        $this->assertEquals('19 мар 16 в 6:47', DateTime_Humanizer::humanizeTimestamp('ru', '2016-03-19 06:47:41'));
    }

    public function test__zero_answer2()
    {
        $this->assertEquals('19 Mar 16 at 6:47 am', DateTime_Humanizer::humanizeTimestamp('en', '2016-03-19 06:47:41'));
    }
}
