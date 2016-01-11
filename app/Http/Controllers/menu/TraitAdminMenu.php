<?php  namespace App\Http\Controllers\Menu;

use View;

trait TraitAdminMenu {

    public function getMenu()
    {
        View::composer('partials.admin_nav', function ($view) {

            $menu = 'admin menu';

            $view->with(compact('menu'));

        });
    }
}