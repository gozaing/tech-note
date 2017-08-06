<?php

namespace App\Http\Controllers;

use App\Services\MemoServiceInterface;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    private $memoService;

    public function __construct(MemoServiceInterface $memoServiceInterface)
    {
        $this->memoService = $memoServiceInterface;
    }

    public function index()
    {
        $list = $this->memoService->getList();
        return view('memo.list', compact('list'));
    }


}
