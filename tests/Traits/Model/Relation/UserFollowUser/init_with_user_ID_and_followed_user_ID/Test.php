<?php

namespace Test\Traits\Model\Relation\UserFollowUser\init_with_user_ID_and_followed_user_ID;

class Test extends \PHPUnit\Framework\TestCase
{
    public function test__BaseParams()
    {
        $rel = \Model\Relation\UserFollowUser::init_with_user_ID_and_followed_user_ID(3, 9);

        $this->assertEquals(null, $rel->id);
        $this->assertEquals(3, $rel->userID);
        $this->assertEquals(9, $rel->followedUserID);
        $this->assertEquals(null, $rel->createdAt);
    }
}
