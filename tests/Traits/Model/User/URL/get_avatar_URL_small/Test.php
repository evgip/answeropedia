<?php

namespace Test\Traits\Model\User\URL\get_avatar_URL_small;

class Test extends \PHPUnit\Framework\TestCase
{
    public function test__Default_avatar()
    {
        $user = new \Model\User();
        $user->id = 13;
        $user->name = 'Sasha';

        $this->assertEquals('https://avatars.answeropedia.org/avatars/user.png?size=100&name=Sasha', $user->get_avatar_URL_small());
    }

    public function test__Avatar_uploaded()
    {
        $user = new \Model\User();
        $user->id = 13;
        $user->name = 'Sasha';
        $user->is_avatar_uploaded = true;

        $this->assertEquals('https://answeropedia.org/uploads/avatar/13_100.jpg', $user->get_avatar_URL_small());
    }
}
