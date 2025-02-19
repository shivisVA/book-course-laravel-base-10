<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       $posts = Post::paginate(2);

       return view('dashboard/post/index', compact('posts'));
       //$category= Category::find(1);
      // dd($category->posts[1]->title);
    /**    $post->update(
            [
                'title'=>'test titulo',
                'slug'=>'test slug',
                'content'=>' content',
                'category_id'=>1,
                'description'=>'test descripcion',
                'posted'=>'not',
                'image'=>'test image',
            ]
*/
       /**Post::create(
            [
                'title'=>'test title',
                'slug'=>'test slug',
                'content'=>'test content',
                'category_id'=>1,
                'description'=>'test description',
                'posted'=>'not',
                'image'=>'test image',
            ]
        );*/

        
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post= new Post();
        return view('dashboard/post/create',  compact('categories', 'post')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
     /** $validated= Validator::make($request->all(),[
            'title'=>'required|min:5|max:500',
            'slug'=>'required|min:5|max:500',
            'content'=>'required|min:7',
            'category_id'=>'required|integer',
            'description'=>'required|min:7',
            'posted'=>'required',
        ]);
        dd($validated->errors());*/

       Post::create($request->validated());
        return to_route('post.index'); 
  /**      
        $request->validate([
            'title'=>'required|min:5|max:500',
            'slug'=>'required|min:5|max:500',
            'content'=>'required|min:7',
            'category_id'=>'required|integer',
            'description'=>'required|min:7',
            'posted'=>'required',
        ]);

        echo 'not';

        
       /** Post::create(
            [
                'title'=>$request->all()['title'],
                'slug'=>$request->all()['slug'],
                'content'=>$request->all()['content'],
                'category_id'=>$request->all()['category_id'],
                'description'=>$request->all()['description'],
               // 'posted'=>$request->all()['posted'],
                //'image'=>$request->all()['image'],
            ]
        );*/
        //dd(request()->get('title'));
       //dd($request->all()['title']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show',['post'=>$post]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category ::pluck('id', 'title');
        return view('dashboard.post.edit', compact ('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $data=$request->validated();
        //image
        if(isset($data['image'])){

             $data['image']=$filename= time().'.'.$data['image']->extension();
             $request->image->move(public_path('uploads/posts'),$filename);
        }
        //image
       
        $post->update($request->validated());
        return to_route('post.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        
        $post->delete();
         return to_route('post.index');
        //
    }
}
