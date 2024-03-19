<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
   // public function showCreateForm(){
    //    return view('/task');
    //}

    public function Showdisplay(){
        $tasks = Task::orderBy('created_at','desc')->paginate(10);
        return view('/display',['tasks'=>$tasks]);
    }


    public function actuallyUpdate(Request $request, $id){

        $incomingFields = $request->validate([
            'title'=> ['required', 'string', 'min:1', 'max:100'],
            'description'=> ['required', 'string', 'min:1', 'max:500'],
            'due_date'=>['required'],
            'status'=> ['nullable'],
        ]);

        Task::where('id', $id)->update($incomingFields);
        //$request->update($incomingFields);

        return redirect()->route('show.display')->with('success', ' successfully edited');
    }



public function showEditForm($id) {
    $tasks = Task::find($id);
    return view('components.edit', compact('tasks'));
    // return view(route('show.form'), ['tasks'=> $tasks]);
}


    public function StoreData(Request $request){
        // dd($request->all());
        $incomingFields = $request ->validate([
            'title'=> ['required', 'string', 'min:1', 'max:100'],
            'description'=> ['required', 'string', 'min:1', 'max:500'],
            'due_date'=>['required'],
            'status'=> ['nullable'],
        ]);

        // dd($incomingFields);

        Task::create([
            'title' => $request->title,
            'description'=>$request->description,
            'due_date'=>$request->due_date,
            'status'=>$request->status,
        ]);


        return redirect()->route('show.display')->with('success', 'successfully saved');
    }

    public function Remove($id){
        $task=Task::where('id',$id)->first();
        $task->delete();

        return redirect()->route('show.display')->with(['sucess', 'sucessfully deleted']);
    }



}
