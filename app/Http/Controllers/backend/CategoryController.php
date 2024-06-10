<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        public function index()
        {
            $list=Category::where("status","!=",0)
            ->orderBy("created_at","desc")
            ->select("id","name","image","slug","description","status")
            ->get();
            $htmlparentid = "";
            $htmlsortorder = "";
            foreach ($list as $row) {
                $htmlparentid .= "<option value='{$row->id}'>{$row->name}</option>";
                $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>Sau {$row->name}</option>";
            }
            return view('backend.category.index',compact("list","htmlparentid","htmlsortorder"));
    
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category=new Category();
        $category->name=$request->name;
        $category->description=$request->description;
        $category->parent_id=$request->parent_id;
        $category->sort_order=$request->sort_order;

        $category->status=$request->status;
        if($request->image)
        {
            $fileName=date('YmdHis').'.'.$request->image->extension();
            $request->image->move(public_path('images/category/'),$fileName);
            $category->image=$fileName;
        }
        $category->slug=Str::of($request->name)->slug('-');
        $category->created_at=date('Y-m-d H:i:s');
        $category->created_by=Auth::id()??1;//dang nhap

        $category->save();
        return redirect()->route('admin.category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
