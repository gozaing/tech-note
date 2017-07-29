<?php

namespace app\Repositories;

use app\Repositories\MemoInterface;
use app\Memo;

/**
 * Class MemoRepository
 * @package app\Repositories
 */
class MemoRepository implements Memointerface
{
    protected $memo;

    public function __construct(Memo $memo)
    {
        $this->memo = $memo;
    }

    public function get()
    {
        //
    }

}
