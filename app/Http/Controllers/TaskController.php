<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {

        //Bisa Seperti ini atau jika sama maka bisa menggunakan compact
        // return view('tasks.index', ['tasks' => $tasks]);

        // $tasks = DB::table('tasks')->get();
        // return view('tasks.index', ['tasks' => $tasks]);

        //Atau kita bisa persingkat seperti ini

        return view('tasks.index', [
            // 'tasks' => DB::table('tasks')->get(),
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(Request $request)
    {

        Task::create([
            'list' => $request->list, 
            'mark' => false,
        ]);


        // return redirect('tasks');
        // return redirect()->back();
        return back();
    }


    public function edit($id)
    {
        // $task = Task::where('id', $id)->first();

        $task = Task::find($id);

        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        Task::find($id)->update(['list' => $request->list]);
        return redirect('tasks');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return back();
        // $task->delete();
    }
}
