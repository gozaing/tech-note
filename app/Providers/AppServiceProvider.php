<?php

namespace App\Providers;

use App\Services\MemoService;
use App\Services\MemoServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // メモサービス (ここの必要性と、なぜsingleton が理解出来ていない)
        // singleton を利用すると内容がcache される
        // cache が必要なければ bind でも良い
        $this->app->singleton(MemoServiceInterface::class, MemoService::class);
    }
}
