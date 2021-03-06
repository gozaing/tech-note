<?php

namespace App\Services;

use App\Repositories\MemoInterface;
use Illuminate\Validation\Factory as ValidateFactory;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Support\Facades\Log;

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
     * @return array
     */
    public function save($request)
    {
        $input = $request->only(['id', 'title', 'memo']);

        $v = $this->validateFactory->make($input, $this->rules);

        $result = array('id' => null, 'message' => null);
        if ($v->fails()) {
            // return null;
            $result['message'] = $v->errors();
            return $result;
        }


        if (is_null($input['id'])) {
            $id = $this->memoInterface->create($input);
        } else {
            $id = $this->memoInterface->update($input);
        }

        $result['id'] = $id;

        return $result;
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