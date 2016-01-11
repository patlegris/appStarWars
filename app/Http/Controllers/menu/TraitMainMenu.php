<?php  namespace App\Http\Controllers\Menu;

use View;
use Auth;
use App\Category;

trait TraitMainMenu {

    public function getMenu()
    {
        View::composer('partials.nav', function ($view) {

            $categories = Category::lists('title', 'id'); // collection title and id

            $view->with(compact('categories'));

        });
    }
}