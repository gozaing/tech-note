<?php

namespace Tests\Repositories;

use App\Repositories\MemoInterface;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MemoRepositoryTest extends TestCase
{
    use DatabaseTransactions;

    protected $repo;

    public function setUp()
    {
        parent::setUp();
        $this->repo = $this->app->make(MemoInterface::class);
    }

    public function testGet()
    {
        $result = $this->repo->get(1);
        $this->assertSame($result->title, 'Vim');
        $this->assertSame($result->memo, 'Esc連打');
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
