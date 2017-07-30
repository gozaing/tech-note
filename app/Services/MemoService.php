<?php

namespace App\Services;

use App\Repositories\MemoInterface;
use Illuminate\Validation\Factory as ValidateFactory;

/**
 * Class MemoService
 * @package Memo\Services
 */
class MemoService implements MemoServiceInterface
{
    /**
     * @var MemoInterface
     */
    protected $memoInterface;

    /**
     * @var ValidateFactory
     */
    protected $validateFactory;

    /**
     * @var array
     */
    protected $rules = ["title" => "required|max: 100", "memo" => "required"];

    public function __construct(MemoInterface $memoInterface, ValidateFactory $validateFactory)
    {
        $this->memoInterface = $memoInterface;
        $this->validateFactory = $validateFactory;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->memoInterface->get($id);
    }

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->memoInterface->getList();
    }

    /**
     * @param $request
     * @param $id
     * @return $id
     */
    public function save($request, $id=null)
    {
        $input = $request->only(['title', 'memo']);
        $v = $this->validateFactory->make($input, $this->rules);
        if ($v->fails()) {
            return null;
        }

        if (is_null($id)) {
            $id = $this->memoInterface->create($input);
        } else {
            $id = $this->memoInterface->update($id, $input);
        }

        return $id;
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $this->memoInterface->delete($id);
        return true;
    }

    /**
     * @return mixed
     */
    public function createEntity()
    {
        return $this->memoInterface->createEntity();
    }
}