<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;
use App\Models\Setting;

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
        $settings = Setting::checksettings();
        $categories = Category::with('children')->where('parent',0)->orWhere('parent', null)->get();
        $lastFivePosts = Post::with('category', 'user')->orderBy('id')->limit(5)->get();
        view()->share([
            'setting' => $settings,
            'categories' => $categories,
            'lastFivePosts' => $lastFivePosts,
        ]);
    }
}
