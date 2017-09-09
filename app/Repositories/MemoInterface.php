<?php

namespace App\Repositories;

interface MemoInterface
{
    /**
     * 取得
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * 一覧取得
     * @return mixed
     */
    public function getList();

    /**
     * 更新
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($data);

    /**
     * 作成
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * 削除
     * @param $id
     * @return mixed
     */
    public function destroy($id);
}
