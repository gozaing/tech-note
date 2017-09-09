<?php

namespace App\Services;

interface MemoServiceInterface
{
    public function get($id);

    public function getList();

    public function save($input);

    public function delete($id);

    public function createEntity();
}