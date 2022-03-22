<?php

namespace App\Providers;

use App\Logo;
use App\Project;
use App\ProjectImage;
use App\TopHeader;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;

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
        Schema::defaultStringLength('191');
        View::composer(['frontend.*'], function ($view){[
            $view->topHeader        = TopHeader::all()->first(),
            $view->logo             = Logo::all()->first(),
            $view->lastProjects     = Project::orderBy('id','desc')->take(2)->get(),
            $view->projects         = Project::all(),
            $view->projectImages    = ProjectImage::take(6)->get()
        ];
        });
    }
}
