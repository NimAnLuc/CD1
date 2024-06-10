<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Product::where("product.status","!=",0)
        ->join('category','product.category_id','=','category.id')
        ->join('brand','product.brand_id','=','brand.id')
        ->orderBy("product.created_at","desc")
        ->select("product.id","product.name","product.image","category.name as cat","brand.name as brand","product.status")
        ->get();    
        return view('backend.product.index',compact("list"));
    }
    public function create()
    {
        $list=Product::where("product.status","!=",0)
        ->join('category','product.category_id','=','category.id')
        ->join('brand','product.brand_id','=','brand.id')
        ->orderBy("product.created_at","desc")
        ->select("category.name as cat","brand.name as brand","brand.id as brid","category.id as catid")
        ->get();    
        $htmlbrandid = "";
        $htmlcategoryid = "";
        foreach ($list as $row) {
            $htmlbrandid .= "<option value='{$row->brid}'>{$row->brand}</option>";
            $htmlcategoryid .= "<option value='{$row->catid}'>{$row->cat}</option>";
        }
        return view('backend.product.create',compact("list","htmlbrandid","htmlcategoryid"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Log::info('Store method called', $request->all());
        $product=new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->detail=$request->detail;
        $product->price=$request->price;
        $product->pricesale=$request->pricesale;

        $product->brand_id=$request->brand_id;
        $product->category_id=$request->category_id;
        $product->status=$request->status;
        if($request->image)
        {
            $fileName=date('YmdHis').'.'.$request->image->extension();
            $request->image->move(public_path('images/product/'),$fileName);
            $product->image=$fileName;
        }
        $product->slug=Str::of($request->name)->slug('-');
        $product->created_at=date('Y-m-d H:i:s');
        $product->created_by=Auth::id()??1;//dang nhap

        $product->save();
        return redirect()->route('admin.product.index');
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
