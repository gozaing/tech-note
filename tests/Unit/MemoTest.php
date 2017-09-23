<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MemoTest extends TestCase
{

    use DatabaseMigrations;

    public function testMemoData()
    {
        // Factory で 1件Insert
        $data = factory(\App\Memo::class, 'first')->create()->toArray();
        $expected_id = $data['id'];
        $expected_title = $data['title'];

        // Repository 経由で List 取得 (Factory で Insert した1件のみ)
        $this->memo = new \App\Repositories\MemoRepository(new \App\Memo());
        $result = $this->memo->getList()->toArray();

        $this->assertEquals($expected_id, $result[0]['id']);
        $this->assertEquals($expected_title, $result[0]['title']);
    }
}
