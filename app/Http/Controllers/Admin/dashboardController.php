<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Menu\TraitAdminMenu;

class DashboardController extends Controller
{
    use TraitAdminMenu;

    public function __construct()
    {
        $this->getMenu();
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}