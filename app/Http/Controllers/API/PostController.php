<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Post;
use App\Posts;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(['status'=>'successfully', 'data' =>Post::all()], 200);
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $va= Validated::make($request->all() ,[
                'title' => 'required|make:250',
                'body' => 'required|make:2500'
            ]);

        if ($va->fails()) {
            return response()->json(['status'=>'error', 'errors' => $va->errors()], 422);
        }

        $post = Post::create($request->all());

        if ($post->save()) {

            return response()->json(['status'=>'successfully', 'data' =>Post::all()],  201);

        } else {

            return response()->json(['status'=>'error'], 500);

        }

    }


    public function show(Posts $posts)
    {
        $post = Post::find($id);

        if (empty($post)) {
            return response()->json(['status'=>'error'], 500);
        } else {
            return response()->json(['status'=>'success', 'data' =>$post],  201);
        }

    }


    public function edit(Posts $posts)
    {

    }


    public function update(Request $request, Posts $posts, $id)
    {
        $post = Post::find($id);


        $va= Validated::make($request->all() ,[
            'title' => 'required|make:250',
            'body' => 'required|make:2500'
        ]);
        if (empty($post)) {
            return response()->json(['status'=>'error','errors'=> $va->errors()], 422);
        }

        $post->update($request->all());

        if ($post->update()) {

            return response()->json(['status'=>'successfully', 'data' =>$post],  201);

        } else {

            return response()->json(['status'=>'error'], 500);

        }
    }


    public function destroy(Posts $posts, $id)
    {
        $post = Post::find($id);

        if (empty($post)) {

            return response()->json(['status'=>'error','message' => 'not found'], 422);

        } else {

            return response()->json(['status'=>'successfully', 'data' =>$post],  200);
        }

    }
}
