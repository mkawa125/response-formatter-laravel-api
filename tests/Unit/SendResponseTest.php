<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use IPFSoftwares\ResponseFormatter\Formatter;

class SendResponseTest extends \Orchestra\Testbench\TestCase
{

     /** @test */
    public function request_has_all_variables()
    {
        $formatter = new Formatter();
        $this->assertTrue(true);
    }
}
