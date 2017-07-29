<?php
interface MemoServiceInterface
{
    public function get($id);

    public function getList();

    public function save($input, $id=null);

    public function delete($id);

    public function createEntity();
}