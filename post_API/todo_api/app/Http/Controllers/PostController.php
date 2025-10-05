<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //adding a function which will returns all posts in json format.
    public function index()
    {
        $posts =  DB::table("posts")->get();
        // dd($posts);
        http_response_code(200);
        return response()->json($posts);
    }
    public function show($postID)
    {
        $post = DB::table("posts")->where("post_id", $postID)->get();
        if (!empty($post[0])) {
            http_response_code(200);
            return response()->json($post[0]);
        } else {
            http_response_code(403);
            return response()->json(['message' => 'no post found']);
        }
    }

    public function addPost(Request $request)
    {
        $dataToSubmit = [
            "post_id"   => "post-" . rand(1000, 9999) . "-" . time(),
            "title"     => $request->title,
            "description"      => $request->desc
        ];
        $rows = DB::table("posts")->insert($dataToSubmit);
        $message = ($rows == 1) ? "post_insert_success" : "post_insert_error";
        return response()->json(['message' => $message]);
    }

    public function updatePost($pid, Request $request)
    {
        $dataToUpdate = [
            "title"      => $request->editTitle,
            "description" => $request->editDesc
        ];
        $post_id = $pid;
        $rows = DB::table("posts")->where("post_id", $post_id)->update($dataToUpdate);
        $message = ($rows == 1) ? "post_update_success" : "post_update_error";
        return response()->json(['message' => $message]);
    }

    public function deletePost($pid)
    {
        $rows = DB::table("posts")->where("post_id", $pid)->delete();
        $message = ($rows == 1) ? "post_delete_success" : "post_delete_error";
        return response()->json(['message' => $message]);
    }
}
