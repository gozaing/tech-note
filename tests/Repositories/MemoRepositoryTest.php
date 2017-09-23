<?php

namespace Tests\Repositories;

use App\Repositories\MemoInterface;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MemoRepositoryTest extends TestCase
{
//    use DatabaseTransactions;
    use DatabaseMigrations;

    protected $repo;

    public function setUp()
    {
        parent::setUp();
        $this->repo = $this->app->make(MemoInterface::class);
    }

    public function testGet()
    {
       factory(\App\Memo::class, 'first')->create();

        $result = $this->repo->get(1);
        $this->assertSame($result->title, 'Emacs');
        $this->assertSame($result->memo, '終了出来ない');
    }

    public function testCreateOK()
    {
        $data = array('title' => 'title', 'memo' => 'memo');
        $result = $this->repo->create($data);

        $this->assertSame($result, true);
    }

    public function testCreateOkWithEmptyValue()
    {
        $data = array('title' => '', 'memo' => '');
        $result = $this->repo->create($data);

        $this->assertSame($result, true);
    }

}
