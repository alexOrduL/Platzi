<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
    {

        $result = validate_email('e@@mail.com');
        $this->assertfalse($result);

        $result = validate_email('e@mail.com');
        $this->assertTrue($result);
    }
}
