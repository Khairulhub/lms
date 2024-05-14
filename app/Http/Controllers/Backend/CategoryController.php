<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
// use Intervention\Image\Image;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = Category::latest()->get();
        return view('admin.backend.category.all_category', compact('categories'));
    }


    // Add Category
    public function AddCategory(){
        return view('admin.backend.category.add_category');
    }

    // Store Category
    public function StoreCategory(Request $request){
        if($request->file('photo')){

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('photo')->getClientOriginalExtension();
            $img = $manager->read($request->file('photo'));
            $img->resize(370, 246);
            // $img = save(base_path('public/upload/category/' . $category));

            $save_url = 'upload/category/' . $name_gen; // Define the save URL



            $img->save(public_path($save_url));

            Category::insert([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
                'photo' => $save_url,
            ]);
        }
        $notification= array(
            'message' => 'Category Added Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('all.category')->with($notification);


    }



    // edit category
    public function EditCategory($id){
        $category = Category::find($id);
        return view('admin.backend.category.edit_category', compact('category'));

    }

    // update category
    public function UpdateCategory(Request $request){
        $cat_id = $request->id;
        // dd($cat_id);
        
    
        if($request->file('photo')){
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('photo')->getClientOriginalExtension();
            $img = $manager->read($request->file('photo'));
            $img->resize(370, 246);
    
            $save_url = 'upload/category/' . $name_gen;
            $img->save(public_path($save_url));
    
            Category::find($cat_id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
                'photo' => $save_url,
            ]);
    
            $notification= array(
                'message' => 'Category Updated with image Successfully',
                'alert-type' =>'success'
            );
    
            return redirect()->route('all.category')->with($notification);
        } 
        else {
            Category::find($cat_id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            ]);
    
            $notification= array(
                'message' => 'Category updated without image Successfully',
                'alert-type' =>'success'
            );
    
            return redirect()->route('all.category')->with($notification);
        }
    }





    // delete category
    public function DeleteCategory($id){
        $item = Category::find($id);
        $img = $item->photo;
        unlink($img);

        Category::find($id)->delete();


        $notification= array(
           'message' => 'Category Deleted Successfully',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);
    }
    
}
