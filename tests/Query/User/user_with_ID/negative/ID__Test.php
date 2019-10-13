<?php

class Query_Users__user_with_ID__negative__IDTest extends \Tests\DB\TestCase
{
    public function test__ID_equal_zero()
    {
        $this->expectExceptionMessage('User id param 0 must be greater than or equal to 1');
        (new \Query\User())->user_with_ID(0);
    }

    public function test__ID_below_zero()
    {
        $this->expectExceptionMessage('User id param -1 must be greater than or equal to 1');
        (new \Query\User())->user_with_ID(-1);
    }
}
