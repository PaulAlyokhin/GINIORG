<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\Category;

class FAQController extends Controller
{
    //
    public function __construct(){

    }

    public function getFAQList(){
        $data['title'] = "FAQ";
        $data['FAQs'] = FAQ::all();
        $data['categories'] = Category::all();
        foreach($data['FAQs'] as &$single){
            if($single->category != 0){
                $category = Category::where('id', $single->category)->first();
                $single->category = $category->category_name;
            }
            else
                $single->category = "No Category";
        }
        return view('Admin.FAQ.faq_list', $data);
    }

    public function EditFAQ(Request $request){
        $request->validate([
            'category' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);
        $new_faq = FAQ::where('id', $request->faq_id);
        $new_faq->category = $request->category;
        $new_faq->question = $request->question;
        $new_faq->answer = $request->answer;
        $new_faq->save();
        return back();
    }

    public function postNew(Request $request){
        $request->validate([
            'category' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);
        $new_faq = new FAQ();
        $new_faq->category = $request->category;
        $new_faq->question = $request->question;
        $new_faq->answer = $request->answer;
        $new_faq->save();
        return back();
    }

    public function getInfo(Request $request){
        $cur_faq = FAQ::where('id', $request->id)->first();
        return $cur_faq;
    }

    public function Disable($id){
        $cur_faq = FAQ::where('id', $id)->first();
        $cur_faq->visible = 0;
        $cur_faq->save();
        return back();
    }

    public function Delete($id){
        $cur_faq = FAQ::where('id', $id)->first();
        $cur_faq->delete();
        return back();
    }
}
