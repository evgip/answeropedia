<?php

class Hashtags_Query__findNewest__en__Test extends Abstract_DB_TestCase
{
    protected $setUpDB = ['en' => ['hashtags']];

    public function test_withoutParams()
    {
        $hashtags = (new Hashtags_Query('en'))->findNewest();

        $this->assertEquals(10, count($hashtags));

        $this->assertEquals(17, $hashtags[0]->id);
        $this->assertEquals('Photosynthez', $hashtags[0]->title);

        $this->assertEquals(8, $hashtags[9]->id);
        $this->assertEquals('Parfum', $hashtags[9]->title);
    }
}
