<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $businesses =Business::all();
        $categories = Category::all();
        return view('admin.dashboard.show',compact('businesses','categories'));
    }
}
