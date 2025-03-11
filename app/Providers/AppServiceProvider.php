<?php

namespace App\Providers;

use App\Validator\CustomeValidator;
use Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Gallery;
use Illuminate\Support\Facades\View;



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
    public function boot()
{
    View::composer('*', function ($view) {
        $galleries = Gallery::all(); // Fetch all galleries from DB
        $view->with('galleries', $galleries);
    });
}
}
