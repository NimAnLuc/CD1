<?php


namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Topic;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Topic::where("status","!=",0)
        ->orderBy("created_at","desc")
        ->select("id","name","slug","status")
        ->get();    
        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>Sau {$row->name}</option>";
        } 
        return view('backend.topic.index',compact("list","htmlsortorder"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $topic=new Topic();
        $topic->name=$request->name;
        $topic->description=$request->description;
        $topic->sort_order=$request->sort_order;
        $topic->status=$request->status;
        $topic->slug=Str::of($request->name)->slug('-');
        $topic->created_at=date('Y-m-d H:i:s');
        $topic->created_by=Auth::id()??1;//dang nhap

        $topic->save();
        return redirect()->route('admin.topic.index');
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
