<?php

class Mapper_User_Update_id_Test extends Abstract_DB_TestCase
{
    protected $setUpDB = ['users' => ['users']];

    public function test_UpdateUserWithNotExistsID_ThrowException()
    {
        $user = new User_Model();
        $user->setID(1352);
        $user->setUsername('steve');
        $user->setName('Steve Bo');
        $user->setSignature('Foo bar');
        $user->setEmail('steve@aw.org');
        $user->setPasswordHash('$2a$10$3f6bd68f206c46e04c8ecOVlP228zJXYjSbuVRiEMhoIWxjWkzcvy');
        $user->setAPIKey('4447243e3e1766375d23b06bf6dd1271');

        $this->expectExceptionMessage('User with ID 1352 not updated');
        $user = (new User_Mapper())->update($user);
    }

    public function test_UpdateUserWithIDEqualZero_ThrowException()
    {
        $user = new User_Model();
        $user->setID(0);
        $user->setUsername('steve');
        $user->setName('Steve Bo');
        $user->setSignature('Foo bar');
        $user->setEmail('steve@aw.org');
        $user->setPasswordHash('$2a$10$3f6bd68f206c46e04c8ecOVlP228zJXYjSbuVRiEMhoIWxjWkzcvy');
        $user->setAPIKey('4447243e3e1766375d23b06bf6dd1271');
        $user->setCreatedAt('2016-03-19 06:47:41');

        $this->expectExceptionMessage('User id param 0 must be greater than or equal to 1');
        $user = (new User_Mapper())->update($user);
    }

    public function test_UpdateUserWithIDBelowZero_ThrowException()
    {
        $user = new User_Model();
        $user->setID(-1);
        $user->setUsername('steve');
        $user->setName('Steve Bo');
        $user->setSignature('Foo bar');
        $user->setEmail('steve@aw.org');
        $user->setPasswordHash('$2a$10$3f6bd68f206c46e04c8ecOVlP228zJXYjSbuVRiEMhoIWxjWkzcvy');
        $user->setAPIKey('4447243e3e1766375d23b06bf6dd1271');
        $user->setCreatedAt('2016-03-19 06:47:41');

        $this->expectExceptionMessage('User id param -1 must be greater than or equal to 1');
        $user = (new User_Mapper())->update($user);
    }
}
