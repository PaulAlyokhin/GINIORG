<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Comments;

class BlogController extends Controller
{
    //
    public function __construct(){

    }

    public function postNew(Request $request){
        //return $request;
        $new_blog = new Blogs();
        $new_blog->user_id = auth()->user()->id;
        $new_blog->user_email = $request->email;
        $new_blog->title = $request->title;
        $new_blog->content = $request->description;
        $new_blog->type = $request->type;
        $new_blog->video_url = $request->video_url;
        $new_blog->what_for = $request->what_for;
        $new_blog->save();
        $files = $request->file('attachments');
        $temp_file = $request->file('temp_file');
        //return $files;
        if($request->hasFile('attachments'))
        {
            foreach ($files as $file) {
                $destination_path = 'files/' . 'blog/'.$new_blog->id;
                Storage::put($destination_path, $file);
                $new_blog->blog_media = $destination_path;
            }
        }
        /*foreach ($request->files as $each) {
            $file = $request->file($each);
            if(!empty($file)){
                $destination_path = 'files/' . 'blog/'.$new_blog->id;
                Storage::put($destination_path, $file);
                $new_blog->blog_media = $destination_path;
            }    
        }*/
        $new_blog->save();
        return back();
    }

    public function getBlogs(){
        $data['blogs'] = Blogs::all();
        foreach($data['blogs'] as &$blog){
            $creator = User::where('id', $blog->user_id)->first();
            $blog->user_id = $creator->username;
        }
        return view('Front.blog.blogs', $data);
    }

    public function SingleView($id){
        $blog = Blogs::where('id', $id)->first();
        $creator = User::where('id', $blog->user_id)->first();
        $blog->user_id = $creator->username;
        $data['blog'] = $blog;
        $data['recent_posts'] = Blogs::orderby('id', 'desc')->take(5)->get();
        $data['popular_posts'] = Blogs::orderby('id', 'asc')->take(4)->get();
        $data['related_posts'] = Blogs::where('type', $blog->type)->orderby('id', 'desc')->take(5)->get();
        $data['recent_comments'] = Comments::where('blog_id', $blog->id)->orderby('id', 'desc')->take(2)->get();
        foreach($data['recent_comments'] as &$comment){
            $creator = User::where('id', $comment->user_id)->first();
            $comment->user_id = $creator->username;
        }
        return view('Front.blog.single', $data);
    }

    public function NextView($id){
        $id = $id+1;
        while(empty($blog)){
            $blog = Blogs::where('id', $id)->first();
            $id = $id+1;
        }
        $creator = User::where('id', $blog->user_id)->first();
        $blog->user_id = $creator->username;
        $data['blog'] = $blog;
        $data['recent_posts'] = Blogs::orderby('id', 'desc')->take(5)->get();
        $data['popular_posts'] = Blogs::orderby('id', 'asc')->take(4)->get();
        $data['related_posts'] = Blogs::where('type', $blog->type)->orderby('id', 'desc')->take(5)->get();
        $data['recent_comments'] = Comments::where('blog_id', $blog->id)->orderby('id', 'desc')->take(2)->get();
        foreach($data['recent_comments'] as &$comment){
            $creator = User::where('id', $comment->user_id)->first();
            $comment->user_id = $creator->username;
        }
        return view('Front.blog.single', $data);        
    }

    public function PrevView($id){
        $id = $id-1;
        while(empty($blog)){
            $blog = Blogs::where('id', $id)->first();
            $id = $id-1;
        }
        $creator = User::where('id', $blog->user_id)->first();
        $blog->user_id = $creator->username;
        $data['blog'] = $blog;
        $data['recent_posts'] = Blogs::orderby('id', 'desc')->take(5)->get();
        $data['popular_posts'] = Blogs::orderby('id', 'asc')->take(4)->get();
        $data['related_posts'] = Blogs::where('type', $blog->type)->orderby('id', 'desc')->take(5)->get();
        $data['recent_comments'] = Comments::where('blog_id', $blog->id)->orderby('id', 'desc')->take(2)->get();
        foreach($data['recent_comments'] as &$comment){
            $creator = User::where('id', $comment->user_id)->first();
            $comment->user_id = $creator->username;
        }
        return view('Front.blog.single', $data);        
    }

    public function PostComment(Request $request){
        //return $request;
        $new_com = new Comments();
        $new_com->user_id = $request->user_id;
        $new_com->blog_id = $request->blog_id;
        $new_com->comment = $request->comment;
        $new_com->save();
        return back();
    }
}
