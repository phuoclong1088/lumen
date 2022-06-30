<?php

namespace App\Http\Controllers;

class TodoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}

    public function index() {
       // $todos = Todo::all();

        return response()->json(["todos" => "2"], 200);
    }

    public function store(Request $request) {
        $todo = Todo::create([
            'content' => $request->content,
            'completed' => false
        ]);

        return response()->json(['todo' => $todo], 200);
    }

    public function delete(Request $request) {
        $todo = Todo::find($request->id);

        if (!is_null($todo)) {
            $todo->delete();
        }

        return response(200);
    }

    public function complete(Request $request) {
        $todo = Todo::find($request->id);

        if (!is_null($todo)) {
            $todo->completed = !$todo->completed;
            $todo->save();
        }

        return response(200);
    }
}
