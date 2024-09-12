<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;

use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = $this->todo->all();
        
        return view('todo.index', ['todos' => $todos]);

    }
    public function create()
{
    return view('todo.create');
}
public function store(TodoRequest $request)
{
    $inputs = $request->all();
    $this->todo->fill($inputs);
    $this->todo->save();
    return redirect()->route('todo.index');
}
public function show($id)
{
    $todo = $this->todo->find($id);
    return view('todo.show', ['todo' => $todo]);
}

private $todo;

public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function edit($id)
    {
        // TODO: 編集対象のレコードの情報を持つTodoモデルのインスタンスを取得
        $todo = $this->todo->find($id);
        return view('todo.edit', ['todo' => $todo]);
    }

    public function update(TodoRequest $request, $id) // 第1引数: リクエスト情報の取得　第2引数: ルートパラメータの取得
    {
        // TODO: リクエストされた値を取得
        $inputs = $request->all();
        $todo = $this->todo->find($id);
        // TODO: 更新したい値の代入とUPDATE文の実行
        $todo->fill($inputs);
        $todo->save();

        return redirect()->route('todo.show', $todo->id); // 追記

    }

    public function delete($id)
{
    $todo = $this->todo->find($id);
    $todo->delete();
    return redirect()->route('todo.index');
}

}