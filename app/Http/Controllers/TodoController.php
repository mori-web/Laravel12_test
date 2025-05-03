<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoController\StoreRequest;
use App\Http\Requests\TodoController\UpdateRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class TodoController extends Controller
{
    private Todo $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    // 一覧
    public function index(Request $request): View
    {
        return view('todos.index', [
            'todos' => Todo::latest()->paginate(12),
        ]);
    }

    // 登録フォーム表示
    public function create(): View
    {
        return view('todos.create');
    }

    // 詳細表示
    public function show(Todo $todo): View
    {
        return view('todos.show', [
            'todo' => $todo,
        ]);
    }

    // 登録
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->todo->fill($request->substitutable())->save();

        return to_route('todos.index')->with('status', '作成しました');
    }

    // 編集フォーム表示
    public function edit(Todo $todo): View
    {
        return view('todos.edit', [
            'todo' => $todo,
        ]);
    }

    // 更新
    public function update(UpdateRequest $request, Todo $todo): RedirectResponse
    {
        $todo->fill($request->substitutable())->save();

        return back()->with('status', '更新しました');
    }

    // 削除
    public function destroy(Todo $todo): RedirectResponse
    {
        $todo->delete();

        return to_route('todos.index')->with('status', '削除しました');
    }
}