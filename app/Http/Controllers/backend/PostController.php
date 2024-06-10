<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Post::where("post.status","!=",0)
        ->leftjoin('topic','post.topic_id','=','topic.id')
        ->orderBy("post.created_at","desc")
        ->select("post.id","post.title","topic.name as topic","post.image","post.type","post.status")
        ->get();    
        return view('backend.post.index',compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list=Post::where("post.status","!=",0)
        ->leftjoin('topic','post.topic_id','=','topic.id')
        ->orderBy("post.created_at","desc")
        ->select("topic.name as topic","topic.id as topid")
        ->get();    
        $htmltopid = "";
        foreach ($list as $row) {
            $htmltopid .= "<option value='{$row->topid}'>{$row->topic}</option>";
        }
        return view('backend.post.create',compact("list","htmltopid"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post=new Post();
        $post->title=$request->title;
        $post->topic_id=$request->topic_id;
        $post->detail=$request->detail;
        $post->description=$request->description;
        $post->type=$request->type;
        $post->status=$request->status;
        if($request->image)
        {
            $fileName=date('YmdHis').'.'.$request->image->extension();
            $request->image->move(public_path('images/post/'),$fileName);
            $post->image=$fileName;
        }
        $post->slug=Str::of($request->name)->slug('-');
        $post->created_at=date('Y-m-d H:i:s');
        $post->created_by=Auth::id()??1;//dang nhap

        $post->save();
        return redirect()->route('admin.post.index');
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
