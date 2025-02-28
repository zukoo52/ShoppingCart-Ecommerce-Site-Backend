<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Modules\CategoryManagement\app\Repositaries\CategoryInterface;
use Modules\CategoryManagement\app\Repositaries\CategoryImplementations;


use Modules\ReviewManagement\app\Repositaries\ReviewImplementations;
use Modules\ReviewManagement\app\Repositaries\ReviewInterface;


use Modules\ProductManagement\app\Repositaries\ProductInterface;
use Modules\ProductManagement\app\Repositaries\ProductImplementations;


use Modules\UserManagement\app\Repositaries\UserInterface;
use Modules\UserManagement\app\Repositaries\UserImplementation;


use Modules\OrderManagement\app\Repositaries\OrderInterface;
use Modules\OrderManagement\app\Repositaries\OrderImplementations;


class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(CategoryInterface::class, CategoryImplementations::class);

        $this->app->bind(ProductInterface::class, ProductImplementations::class);

        $this->app->bind(UserInterface::class, UserImplementation::class);


        $this->app->bind(ReviewInterface::class, ReviewImplementations::class); // dependency injection

        $this->app->bind(OrderInterface::class, OrderImplementations::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Schema::defaultStringLength(191);
    }
}
