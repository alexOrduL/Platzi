<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmailHelper()
    {

        $email = 'correo@correo.com';

        $result = Email::validate($email);

        $this->assertTrue($result);
    }
}
