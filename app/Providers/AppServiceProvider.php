<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * 1. 遅延読み込み防止
         * 2. fillableに登録していない項目の投入を防止
         * 3. 存在しないプロパティへのアクセスを防止
         */
        Model::shouldBeStrict(! $this->app->isProduction());
    }
}
