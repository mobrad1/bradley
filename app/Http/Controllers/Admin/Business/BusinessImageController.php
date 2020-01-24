<?php

namespace App\Http\Controllers\Admin\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessImageController extends Controller
{
    //
    public function index(){
        return view('admin.business.image');
    }
}
