<?php

namespace App\Http\Controllers;
use Session ;
use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $categories =  Category::all();
        if($categories->count() == 0){
            Session::flash('info', 'No category found to add a post, Go ahead and add a category');
            return redirect()->back();
        }
        else{
        return view('admin.posts.create')->with('categories', $categories)->with('tags', Tag::all());
  
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'title' => 'required|min:3|max:255',
            'image' =>  'required|image',
            'content'  => 'required|min:100',
            'category_id' => 'required',
            'tags' => 'required'

            ]);

            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();

            $image->move('upload', $image_new_name);

            $post = Post::create([
               'title' => $request->title ,
               'content' => $request->content,
               'image' =>'upload/' . $image_new_name,
               'category_id' => $request->category_id,
               'slug' => str_slug($request->title),
            ]);
            $post->tags()->attach($request->tags);

            Session::flash('success', 'Post created Successfully');
            return redirect('/admin/home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);
        return view('admin.posts.edit')->with('post', $post)->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:255',
            'image' =>  'required|image',
            'content'  => 'required|min:100',
            'category_id' => 'required'
            ]);

        $post = Post::find($id);
        

$image = $request->image;
$newname = time().$image->getClientOriginalName();
$image->move('upload', $newname );

        $post->title = $request->title;
        $post->content = $request->content;

        $post->image = 'upload/' . $newname;

        $post->category_id = $request->category_id;

$post->save();

Session::flash('success', 'Post updated Successfully');
return redirect()->back();



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();
    
        Session::flash('success', 'Post deleted');
        return redirect()->back();
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->get();

        return view('admin.posts.trash')->with('posts', $posts);
    }

    public function kill($id){

        $post = Post::withTrashed()->where('id', $id)->get()->first();
   $post->forceDelete();
   Session::flash('success', 'Deleted');
   return redirect()->back();

    }


    public function restore($id){
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();
        Session::flash('success', 'Restoration Successful');
        return redirect()->back();


    }
}
