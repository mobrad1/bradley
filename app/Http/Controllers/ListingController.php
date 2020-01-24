<?php

namespace App\Http\Controllers;

use App\Models\Business;
use function compact;
use function count;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    public function index(){
        $businesses = Business::where('status',true)->paginate(20);
        return view("welcome",compact("businesses"));
    }
    public function show(Business $business){
        $business->increment('visits');
        return view('listings',compact('business'));
    }
    public function search(){
        $name = request('name');
        $description = request('description');
        $matches = Business::select();
        if($name != ""){
            $matches->where('name','LIKE','%'.$name.'%');
        }
        if($description != ""){
            $matches->where('description','LIKE','%'.$description.'%');
        }
        if($description != "" && $name != ""){
            $matches->where('description','LIKE','%'.$description.'%')->where('description','LIKE','%'.$description.'%');
        }
        $businesses = $matches->where('status',true)->paginate(20);
        return view("search",compact("businesses"));
    }
}
