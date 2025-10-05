<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    //
    //adding a function which will returns all posts in json format.
    public function index()
    {
        $todos =  DB::table("todos")->get();
        // dd($todos);
        http_response_code(200);
        return response()->json($todos);
    }
    public function show($todoID)
    {
        $todo = DB::table("todos")->where("todo_id", $todoID)->get();
        if (!empty($todo[0])) {
            http_response_code(200);
            return response()->json($todo[0]);
        } else {
            http_response_code(403);
            return response()->json(['message' => 'no todo found']);
        }
    }

    public function addTodo(Request $request)
    {
        //ADDING LARAVEL SERVER SIDE VALIDATIONS.
        $request->validate([
            'title'         => 'required|min:3|max:15',
            'status'        => 'required',
            'description'   => 'required|min:5|max:120'
        ]);

        $dataToSubmit = [
            "todo_id"           => "todo-" . rand(1000, 9999) . "-" . time(),
            "title"             => $request->title,
            "description"       => $request->desc,
            "status"            => $request->status
        ];
        $rows = DB::table("todos")->insert($dataToSubmit);
        $message = ($rows == 1) ? "task_insert_success" : "task_insert_error";
        return response()->json(['message' => $message]);
    }

    public function updateTodo($tid, Request $request)
    {
        $dataToUpdate = [
            "title"      => $request->editTitle,
            "description" => $request->editDesc
        ];
        $todo_id = $tid;
        $rows = DB::table("todos")->where("todo_id", $todo_id)->update($dataToUpdate);
        $message = ($rows == 1) ? "post_update_success" : "post_update_error";
        return response()->json(['message' => $message]);
    }

    public function deleteTodo($tid)
    {
        $rows = DB::table("todos")->where("todo_id", $tid)->delete();
        $message = ($rows == 1) ? "post_delete_success" : "post_delete_error";
        return response()->json(['message' => $message]);
    }
}
