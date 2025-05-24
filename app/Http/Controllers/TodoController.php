<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Aws\S3\S3Client;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TodoController\StoreRequest;
use App\Http\Requests\TodoController\UpdateRequest;

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
        try {
            $imageUrl = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $fileName = time() . '_' . $image->getClientOriginalName();

                $s3 = Storage::disk('s3');
                $result = $s3->putFileAs('', $image, $fileName);

                if ($result) {
                    $imageUrl = $s3->url($result);
                    \Log::info('画像アップロード成功: ' . $imageUrl);
                }
            }

            $todoData = $request->substitutable();
            $todoData['image'] = $imageUrl;

            $this->todo->fill($todoData)->save();

            return to_route('todos.index')->with('status', '作成しました');

        } catch (\Exception $e) {
            \Log::error('Todo作成エラー: ' . $e->getMessage());
            return back()->withInput()->with('error', '作成に失敗しました');
        }
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