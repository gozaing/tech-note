<?php

namespace Tests\Repositories;

use App\Repositories\MemoInterface;
use Tests\TestCase;

class MemoRepositoryTest extends TestCase
{
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

}
