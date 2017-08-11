<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MemoControllerTest extends TestCase
{
    public function testMemoIndex()
    {
        $response = $this->get('/sample');

        $response->assertStatus(301);

        $response->assertSee('<meta http-equiv="refresh" content="0;url=http://localhost/memo" />');

    }
}
