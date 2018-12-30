<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\SEO;

class SEOController extends Controller
{
    //
    public function __construct(){

    }

    public function getSEOList(){
        $data['title'] = 'SEO Description';
        $data['seos'] = SEO::all();
        $data['pages'] = Pages::all();
        foreach($data['seos'] as &$seo){
            $page = Pages::where('id', $seo->page_id)->first();
            $seo->page_id = $page->title;
        }
        return view('Admin.seo.list', $data);
    }

    public function postNew(Request $request){
        $request->validate([
            'page_id' => 'required',
            'title' => 'required',
            'meta_keywords' => 'required',
        ]);
        $new_seo = new SEO();
        $new_seo->page_id = $request->page_id;
        $new_seo->title = $request->title;
        $new_seo->meta_keywords = $request->meta_keywords;
        $new_seo->save();
        return back();
    }

    public function getInfo(Request $request){
        $cur_seo = SEO::where('id', $request->id)->first();
        return $cur_seo;
    }

    public function EditSEO(Request $request){
        $request->validate([
            'page_id' => 'required',
            'title' => 'required',
            'meta_keywords' => 'required',
        ]);
        $cur_seo = SEO::where('id', $request->seo_id)->first();
        $new_seo->page_id = $request->page_id;
        $new_seo->title = $request->title;
        $new_seo->meta_keywords = $request->meta_keywords;
        $new_seo->save();
        return back();
    }

    public function Delete($id){
        $cur_seo = SEO::where('id', $id)->first();
        $cur_seo->delete();
        return back();
    }
}
