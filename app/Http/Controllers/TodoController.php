<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\todo;

class TodoController extends Controller
{
    public function index(){
        return view('welcome', ['list' => todo::all()]);
    }

    public function saveTodo(Request $req){
        $todoObj = new todo();
        $todoObj->title = $req->todo;

        $todoObj->save();

        //save data to the database

        return redirect('/');
    }
    public function destroy($id){
        $data=todo::find($id);
        $data->delete();
        // echo "Record deleted successfully.";
        return redirect('/');
    }

    public function edit($id){
        $data = todo::find($id);
        return view('edit', ['data'=>$data]);
    }

    public function updateTodo(Request $req){
        $todoObj = todo::find($req->id);
        $todoObj->title = $req->todo;

        $todoObj->save();

        return redirect('/');
    }
}