<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Psy\Util\Str;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }
    public function getCategory($id=null){
        return $id?Category::find($id):Category::all();
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(Request $request){
        Category::create([
            'name'=>$request->name,
        ]);
        return redirect('admin/category')->with('message','category added');
    }
}
