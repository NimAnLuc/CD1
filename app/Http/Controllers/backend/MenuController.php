<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Menu::where("status", "!=", 0)
            ->orderBy("created_at", "desc")
            ->get();

        $cat = Category::where("status", "!=", 0)
            ->orderBy("created_at", "desc")
            ->get();
        $brand = Brand::where("status", "!=", 0)
            ->orderBy("created_at", "desc")
            ->get();
        $page = Post::where([["status", "!=", 0], ["type", "=", "page"]])
            ->orderBy("created_at", "desc")
            ->get();
        $topic = Topic::where("status", "!=", 0)
            ->orderBy("created_at", "desc")
            ->get();
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlparentid .= "<option value='{$row->id}'>{$row->name}</option>";
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>Sau {$row->name}</option>";
        }
        return view('backend.menu.index', compact("list", "cat", "brand", "page", "topic"));
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
    public function store(Request $request)
    {
        if (isset($request->createCategory)) {
            $listid = $request->categoryid;
            if ($listid) {
                foreach ($listid as $id) {
                    $category = Category::find($id);
                    $menu = new Menu();
                    $menu->name = $category->name;
                    $menu->link = 'danh-muc/' . $category->slug;
                    $menu->type = 'category';
                    $menu->table_id = $category->id;
                    $menu->sort_order = 0;
                    $menu->parent_id = 0;
                    $menu->status = $request->status;
                    $menu->position = $request->position;
                    $menu->created_at = date('Y-m-d H:i:s');
                    $menu->created_by = Auth::id() ?? 1; //dang nhap
                    $menu->save();
                }
            }
            else{
                echo"Loi";
            }
        }
        if (isset($request->createBrand)) {
            $listid = $request->brandid;
            if ($listid) {
                foreach ($listid as $id) {
                    $brand = Brand::find($id);
                    $menu = new Menu();
                    $menu->name = $brand->name;
                    $menu->link = 'thuong-hieu/' . $brand->slug;
                    $menu->type = 'brand';
                    $menu->table_id = $brand->id;
                    $menu->sort_order = 0;
                    $menu->parent_id = 0;
                    $menu->status = $request->status;
                    $menu->position = $request->position;
                    $menu->created_at = date('Y-m-d H:i:s');
                    $menu->created_by = Auth::id() ?? 1; //dang nhap
                    $menu->save();
                }
            }
            else{
                echo"Loi";
            }
        }
        if (isset($request->createTopic)) {
            $listid = $request->topicid;
            if ($listid) {
                foreach ($listid as $id) {
                    $topic = Topic::find($id);
                    $menu = new Menu();
                    $menu->name = $topic->name;
                    $menu->link = 'chu-de/' . $topic->slug;
                    $menu->type = 'topic';
                    $menu->table_id = $topic->id;
                    $menu->sort_order = 0;
                    $menu->parent_id = 0;
                    $menu->status = $request->status;
                    $menu->position = $request->position;
                    $menu->created_at = date('Y-m-d H:i:s');
                    $menu->created_by = Auth::id() ?? 1; //dang nhap
                    $menu->save();
                }
            }
            else{
                echo"Loi";
            }
        }
        if (isset($request->createPage)) {
            $listid = $request->pageid;
            if ($listid) {
                foreach ($listid as $id) {
                    $page = Post::find($id);
                    $menu = new Menu();
                    $menu->name = $page->name;
                    $menu->link = 'trang-don/' . $page->slug;
                    $menu->type = 'page';
                    $menu->table_id = $page->id;
                    $menu->sort_order = 0;
                    $menu->parent_id = 0;
                    $menu->status = $request->status;
                    $menu->position = $request->position;
                    $menu->created_at = date('Y-m-d H:i:s');
                    $menu->created_by = Auth::id() ?? 1; //dang nhap
                    $menu->save();
                }
            }
            else{
                echo"Loi";
            }
        }
        return redirect()->route('admin.menu.index');
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
