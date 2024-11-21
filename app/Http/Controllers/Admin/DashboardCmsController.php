<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardCmsController extends Controller
{
    public function show(Request $request)
    {
        // get name logged admin with guard
        $name_admin = Auth::guard('admin')->user()->name;
        // var_dump($user);
        return view('cms.index', ['name_admin' => $name_admin]);
    }
}
