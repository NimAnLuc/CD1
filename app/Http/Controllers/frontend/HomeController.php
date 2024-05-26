<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller{
    public function index()
    {
        $list=Menu::get();
        return view('frontend.home');
    }
}