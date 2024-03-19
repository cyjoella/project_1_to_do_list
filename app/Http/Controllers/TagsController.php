<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Task;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function store(Request $request){
        //dd($request->all());

        $incomingFields = $request ->validate([
            'tag_name'=> ['required', 'string', 'min:1', 'max:100'],

        ]);

        Tag::create([
            'task_id' => $request->task_id,
            'tag_name' => $request->tag_name,
        ]);


        return redirect()->route('show.display')->with('success', 'Tag successfully saved');
    }

    public function show($id){
        $task = Task::find($id);
        $tag = Tag::latest()->where('task_id', $task->id)->get();
        $tasks = Task::latest()->get();
       // dd($task, $tag, $tasks);
       return view('/view_tag',compact('tag', 'task', 'tasks'));


    }
}
