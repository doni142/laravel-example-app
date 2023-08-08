<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todo;
use http\Env\Request;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('enyem', [
            'csinald' => \App\Models\Todo::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo_create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodoRequest $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();
        return Redirect::route('todos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view('todo_edit', ['todo'=>$todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        $todo->title = $request->title;
        $todo->save();
        return Redirect::route('todos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return Redirect::route('todos.index');
    }
}
