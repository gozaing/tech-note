<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MemoControllerTest extends TestCase
{
    public function testMemoIndex()
    {
        $response = $this->get('/memo');
        $response->assertStatus(200);

    }
}
