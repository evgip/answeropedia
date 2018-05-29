<?php

class Mapper_User_save_negative_name_Test extends Abstract_DB_TestCase
{
    public function test_empty()
    {
        $user = new User_Model();
        $user->setID(37);
        $user->setUsername('steve');
        $user->setName('');
        $user->setEmail('steve@aw.org');
        $user->setPasswordHash('$2a$10$3f6bd68f206c46e04c8ecOVlP228zJXYjSbuVRiEMhoIWxjWkzcvy');
        $user->setAPIKey('4447243e3e1766375d23b06bf6dd1271');
        $user->setCreatedAt('2016-03-19 06:47:41');

        $this->expectExceptionMessage('User "name" property "" must have a length between 2 and 255');
        $user = (new User_Mapper())->update($user);
    }

    public function test_tooShort()
    {
        $user = new User_Model();
        $user->setID(37);
        $user->setUsername('steve');
        $user->setName('S');
        $user->setEmail('steve@aw.org');
        $user->setPasswordHash('$2a$10$3f6bd68f206c46e04c8ecOVlP228zJXYjSbuVRiEMhoIWxjWkzcvy');
        $user->setAPIKey('4447243e3e1766375d23b06bf6dd1271');
        $user->setCreatedAt('2016-03-19 06:47:41');

        $this->expectExceptionMessage('User "name" property "S" must have a length between 2 and 255');
        $user = (new User_Mapper())->update($user);
    }

    public function test_tooLong()
    {
        $user = new User_Model();
        $user->setID(37);
        $user->setUsername('steve');
        $user->setName('Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve...');
        $user->setEmail('steve@aw.org');
        $user->setPasswordHash('$2a$10$3f6bd68f206c46e04c8ecOVlP228zJXYjSbuVRiEMhoIWxjWkzcvy');
        $user->setAPIKey('4447243e3e1766375d23b06bf6dd1271');
        $user->setCreatedAt('2016-03-19 06:47:41');

        $this->expectExceptionMessage('User "name" property "Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve... Steve..." must have a length between 2 and 255');
        $user = (new User_Mapper())->update($user);
    }
}
