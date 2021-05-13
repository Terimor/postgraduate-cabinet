<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function scienceManager(): View
    {
        return view('admin.science-manager.index');
    }
}
