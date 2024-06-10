<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Banner::where("status","!=",0)
        ->orderBy("created_at","desc")
        ->select("id","name","image","link","position","description","status")
        ->get();    
        return view('backend.banner.index',compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $banner=new Banner();
        $banner->name=$request->name;
        $banner->description=$request->description;
        $banner->link=$request->link;
        $banner->position=$request->position;

        $banner->status=$request->status;
        if($request->image)
        {
            $fileName=date('YmdHis').'.'.$request->image->extension();
            $request->image->move(public_path('images/banner/'),$fileName);
            $banner->image=$fileName;
        }

        $banner->created_at=date('Y-m-d H:i:s');
        $banner->created_by=Auth::id()??1;//dang nhap

        $banner->save();
        return redirect()->route('admin.banner.index');

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
