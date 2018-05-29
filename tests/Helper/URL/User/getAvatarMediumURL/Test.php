<?php

class User_URL_Helper__getAvatarMediumURL__Test extends PHPUnit\Framework\TestCase
{
    public function testFullParams()
    {
        $user = new User_Model();
        $user->setID(13);

        $this->assertEquals('http://octoanswers.com/uploads/avatar/13_200.jpg', User_URL_Helper::getAvatarMediumURL($user));
    }
}
