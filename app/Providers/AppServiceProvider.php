<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Link;
use App\News;
use App\Page;
use Validator;
use DB;
use Cache;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $tree = Category::descendantsOf(1)->toTree();
        view()->share('tree', $tree);


        view()->composer('modules.popular', function($view)
        {
            $view->withPopular(Link::orderBy('hits', 'desc')->take(5)->get());
        });

        view()->composer('modules.lastnews', function($view)
        {
            $view->withLastnews(News::orderBy('created_at', 'desc')->take(5)->get());
        });

        view()->composer('foto.item', function($view)
        {
            $view->withItems(Page::where('category_id', '=','85')->get());
        });

    }


    public function register()
    {
        //
    }
}
