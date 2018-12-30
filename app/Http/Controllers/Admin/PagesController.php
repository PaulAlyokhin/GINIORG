<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;

class PagesController extends Controller
{
    //
    public function __construct(){

    }
    public function getPages(){
        $data['title'] = "All Pages";
        $data['pages'] = Pages::all();
        foreach($data['pages'] as &$page){
            $parent = Pages::where('id', $page->parent_id)->first();
            if(!empty($parent))
                $page->parent_id = $parent->title;
            else
                $page->parent_id = 'Root';
        }
        $data['parent_pages'] = Pages::where('parent_id', 0)->get();
        return view('Admin.page.pages_list',$data);
    }
    public function postNewPage(Request $request){
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required'
        ]);
        $new_page = new Pages();
        $new_page->parent_id = $request->parent_id;
        $new_page->title = $request->title;
        $new_page->content = $request->content;
        $new_page->slug =$request->slug;
        $new_page->save();
        return back();
    }

    public function Delete($id){
        $page = Pages::where('id', $id)->first();
        $page->delete();
        return back();
    }

    public function getInfo(Request $request){
        $page = Pages::where('id', $request->id)->first();
        return $page;
    }

    public function EditPage(Request $request){
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required'
        ]);
        $new_page = Pages::where('id', $request->page_id)->first();
        $new_page->parent_id = $request->parent_id;
        $new_page->title = $request->title;
        $new_page->content = $request->content;
        $new_page->slug =$request->slug;
        $new_page->save();
        return back();
    }
}
