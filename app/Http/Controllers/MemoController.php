<?php

namespace App\Http\Controllers;

use App\Services\MemoServiceInterface;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Log;

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

    public function edit($id)
    {
        $memo = $this->memoService->get($id);
        $list = $this->memoService->getList();
        return view('memo.list', compact('list', 'memo'));
    }

    public function regist(Request $request)
    {
        $result = $this->memoService->save($request);

        if ( is_null($result['message']) === false) {
            return redirect()->back()->withErrors($result['message'])->withInput();
        }
        return redirect('/memo');
    }

}
