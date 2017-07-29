<?php

namespace App\Providers;

use app\Repositories\MemoRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // MemoInterface と MemoRepository をつなげる
        $this->app->bind(\MemoInterface::class, MemoRepository::class);
    }
}
