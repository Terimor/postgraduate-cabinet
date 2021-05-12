<?php

namespace Brackets\AdminAuth\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Inspiring;
use Illuminate\View\View;

class AdminHomepageController extends Controller
{
    /**
     * Display default admin home page
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('brackets/admin-auth::admin.homepage.index', [
            'inspiration' => Inspiring::quote()
        ]);
    }
}
