<?php

class UserFollowTopic_Relation_Model__initWithDBState__Test extends PHPUnit\Framework\TestCase
{
    public function test__EnFullParams_ReturnObject()
    {
        $rel = UserFollowTopic_Relation_Model::initWithDBState([
            'id' => 13,
            'user_id' => 3,
            'topic_id' => 9,
            'created_at' => '2015-11-29 09:28:34'
        ]);

        $this->assertEquals(13, $rel->getID());
        $this->assertEquals(3, $rel->getUserID());
        $this->assertEquals(9, $rel->getTopicID());
        $this->assertEquals('2015-11-29 09:28:34', $rel->getCreatedAt());
    }

    public function test_RuFullParams_ReturnObject()
    {
        $rel = UserFollowTopic_Relation_Model::initWithDBState([
            'id' => 13,
            'user_id' => 3,
            'topic_id' => 9,
            'created_at' => '2015-11-29 09:28:34'
        ]);

        $this->assertEquals(13, $rel->getID());
        $this->assertEquals(3, $rel->getUserID());
        $this->assertEquals(9, $rel->getTopicID());
        $this->assertEquals('2015-11-29 09:28:34', $rel->getCreatedAt());
    }
}
