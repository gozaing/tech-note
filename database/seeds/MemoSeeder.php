<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Memo;

class MemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Memo::create([
            'id' => 1,
            'title' => 'Vim',
            'memo' => 'Esc連打'
        ]);
        Memo::create([
            'id' => 2,
            'title' => 'Emacs',
            'memo' => '終われない'
        ]);
        Memo::create([
            'id' => 3,
            'title' => 'SublimeText',
            'memo' => 'ライセンス購入していない'
        ]);
    }
}
