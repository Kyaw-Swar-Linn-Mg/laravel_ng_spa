<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comment = Comment::get();

        return response()->json($comment);

    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $comment = new Comment();

        $comment->author = $request['author'];

        $comment->text = $request['text'];  

        $comment->save();

        return response()->json(['success' => true]);

    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $comment = Comment::find($id);

        $comment->delete();

        return response()->json(['success' => true]);

    }
}
