<?php

namespace App\Repositories;

use App\Memo;

/**
 * Class MemoRepository
 * @package app\Repositories
 */
class MemoRepository implements MemoInterface
{
    protected $memo;

    public function __construct(Memo $memo)
    {
        $this->memo = $memo;
    }

    public function get($id)
    {
        return $this->memo->find($id);
    }

    public function getList()
    {
        return $this->memo->all(['title']);
        // if use query builder
        // return DB::table('memo')->select('title')->get();
        // and need to add
        // use Illuminate\Support\Facades\DB;
    }

    public function create($data)
    {
        return 'create';
    }

    public function update($id, $data)
    {
        return 'update';
    }

    public function destroy($id)
    {
        return 'destroy';
    }

}
