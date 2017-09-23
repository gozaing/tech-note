<?php

namespace Tests\Unit;

use Laracasts\Integrated\Extensions\Goutte as IntegrationTest;

//テストクラス
class ExampleTest1 extends IntegrationTest
{
    //標準ではhttp://localhost:8888になっている
    protected $baseUrl = "http://homestead.app/memo";

    public function testMemoTop()
    {
        $this->visit('/')->see('Tech-Memo');
    }
}
