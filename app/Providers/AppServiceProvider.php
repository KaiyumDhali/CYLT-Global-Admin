<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

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
        // ✅ api.php manually load করা হলো
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));

        // ✅ web.php ও লোড করাই
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

                View::composer('frontend.layout.app', function ($view) {
        $categoriesWithServices = Category::with('services')->get();
        $view->with('categoriesWithServices', $categoriesWithServices);
    });


    }

}
