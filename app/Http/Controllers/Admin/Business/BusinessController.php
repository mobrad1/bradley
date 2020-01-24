<?php

namespace App\Http\Controllers\Admin\Business;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\BusinessCategory;
use function compact;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function redirect;

class BusinessController extends Controller
{
    //
    public function index(){
        return view('admin.business.show');
    }
    public function store()
    {
        try{
            $this->validationRule();
            $data = request()->all();
            $categories = $data["categories"];
            unset($data["_token"]);
            unset($data["categories"]);
            $data["slug"] = Str::slug($data["name"]);

            DB::transaction(function() use ($data,$categories){
                $business = Business::forceCreate($data);
                foreach($categories as $category){
                    BusinessCategory::forceCreate([
                        "business_id" => $business->id,
                        "category_id" => $category
                    ]);
                }
            });
            return redirect()->back()->with("success","Business created Successfully");
        }catch (ValidationException $e){
            return redirect()->back()->with('errors',$e->getMessage());
        }
    }
    public function validationRule()
    {
        request()->validate([
            "name" => "required",
            "description" => "required",
            "email" => "required",
            "telephone" => "required",
            "website" => "required",
            "categories" => "required"
        ]);
    }
    public function manage(){
        $businesses = Business::all();
        return view("admin.business.manage",compact('businesses'));
    }
    public function show(Business $business){
        return view('admin.business.profile',compact('business'));
    }
    public function delete(Business $business){
        $business->delete();
        return redirect()->back()->with("success","Business deleted successfully");
    }
    public function suspend(Business $business){
        if($business->status == true){
            $business->update(["status" => false]);
            return redirect()->back()->with('error',"Account deactivation successful");
        }else{
            $business->update(["status" => true]);
            return redirect()->back()->with("success","Account activation successful");
        }
    }
    public function update(Business $business){
        $business->update([
            "name" => request('name'),
            "description" => request('description'),
            "email" => request("email"),
            "website" => request("website"),
            "telephone" => request("telephone")
        ]);
        if(request()->has('categories')){
            $this->deleteCategory($business);
            foreach(request('categories') as $item){
                BusinessCategory::forceCreate([
                    "business_id" => $business->id,
                    "category_id" => $item
                ]);
            }
        }

        return redirect()->back()->with("success","Update Successful");
    }
    public function deleteCategory($business){
        $business->category->each(function($item){
            $item->delete();
        });
    }
}
