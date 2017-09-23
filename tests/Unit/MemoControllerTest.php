<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use \Mockery as m;

class MemoControllerTest extends TestCase
{

    use DatabaseMigrations;

    public function tearDown()
    {
        m::close();
    }

    public function testMemoIndex()
    {

//        $service = m::mock('App\Services\MemoService');
//        $service->shouldReceive('getList')->times(1)->andReturn(10, 12, 14);
//        $temperature = new Temperature($service);
//        $this->assertEquals(12, $temperature->average());


        $response = $this->get('/memo');
        $response->assertStatus(200);


    }
}
