<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ["Web design","Software","Training"];
        foreach ($categories as $category){
            Category::forceCreate([
                "name" => $category,
                "slug" => Str::slug($category)
            ]);
        }
    }
}
