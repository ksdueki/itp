<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // https://qiita.com/beer_geek/items/6e4264db142745ea666f
        // Laravel5.4以上、MySQL5.7.7未満 でusersテーブルのマイグレーションを実行すると
        // Syntax error が発生する の回避策
        Schema::defaultStringLength(191);
    }
}
