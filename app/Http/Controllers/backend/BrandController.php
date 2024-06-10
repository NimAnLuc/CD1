<?php

namespace App\Http\Controllers\backend;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Brand::where("status","!=",0)
        ->orderBy("created_at","desc")
        ->select("id","name","image","slug","description","status")
        ->get();    

        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>Sau {$row->name}</option>";
        }
        return view('backend.brand.index',compact("list","htmlsortorder"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $brand=new Brand();
        $brand->name=$request->name;
        $brand->description=$request->description;
        $brand->sort_order=$request->sort_order;
        $brand->status=$request->status;
        if($request->image)
        {
            $fileName=date('YmdHis').'.'.$request->image->extension();
            $request->image->move(public_path('images/brand/'),$fileName);
            $brand->image=$fileName;
        }
        $brand->slug=Str::of($request->name)->slug('-');
        $brand->created_at=date('Y-m-d H:i:s');
        $brand->created_by=Auth::id()??1;//dang nhap

        $brand->save();
        return redirect()->route('admin.brand.index');
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
