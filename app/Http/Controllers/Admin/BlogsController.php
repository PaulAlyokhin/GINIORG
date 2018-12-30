<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\User;

class BlogsController extends Controller
{
    //
    public function getBlogs(){
        $data['title'] = "All Blogs";
        $data['blogs'] = Blogs::all();
        foreach($data['blogs'] as &$blog){
            $user = User::where('id', $blog->user_id)->first();
            $blog->user_id = $user->username;
        }
        return view('Admin.Blog.blogs_list',$data);
    }

    public function newBlog(Request $request){
        $request->validate([
            'username' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $user = User::where('username', $request->username)->first();
        $new_blog = new Blogs();
        $new_blog->user_id = $user->id;
        if(!empty($request->user_email))
            $new_blog->user_email = $request->user_email;
        else
            $new_blog->user_email = $user->email;
        $new_blog->title = $request->title;
        $new_blog->content = $request->content;
        $new_blog->save();
        $file = $request->file('blog_media');
        if(!empty($file)){
            $destination_path = 'files/' . 'blog/'.$new_blog->id. '/';
            Storage::put($destination_path, $file);
            $new_blog->blog_media = $destination_path;
        }    
        $new_blog->save();
        return back();
    }

    public function getInfo(Request $request){
        $blog = Blogs::where('id', $request->id)->first();
        $user = User::where('id', $blog->user_id)->first();
        $blog->user_id = $user->username;
        return $blog;
    }

    public function EditBlog(Request $request){
        $request->validate([
            'username' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $user = User::where('username', $request->username)->first();
        $blog = Blogs::where('id', $request->blog_id)->first();
        $blog->user_id = $user->id;
        if(!empty($request->user_email))
            $blog->user_email = $request->user_email;
        else
            $blog->user_email = $user->email;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return back();
    }

    public function updateStatus($id){
        
    }
    public function Disable($id){
        $blog = Blogs::where('id', $id)->first();
        $blog->status = 1;
        $blog->save();
        return back();
    }
    public function Publish($id){
        $blog = Blogs::where('id', $id)->first();
        $blog->status = 2;
        $blog->save();
        return back();
        
    }
    public function Delete($id){
        $blog = Blogs::where('id', $id)->first();
        $blog->delete();
        return back();        
    }
}
