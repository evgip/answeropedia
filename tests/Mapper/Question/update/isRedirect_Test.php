<?php

class Mapper_Question__update__isRedirect__Test extends \Tests\DB\TestCase
{
    protected $setUpDB = ['ru' => ['questions']];

    public function test_UpdateWithIsRedirectParam_Ok()
    {
        $question = new \Model\Question();
        $question->id = 2;
        $question->title = 'This is question?';
        $question->isRedirect = true;

        $question = (new \Mapper\Question('ru'))->update($question);
        $this->assertEquals(2, $question->id);
        $this->assertEquals(true, $question->isRedirect);
    }
}
