@extends('layouts.app')

@section('content')
    <div class="alert alert-danger text-center" role="alert">
        <i class="fas fa-info-circle"></i>
        アラートメッセージ。アラート表示時に使用してください
    </div>
    <x-parts.basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="mb-0"><i class="fas fa-list"></i> Todo一覧</h4>
            <a href="{{ route('todos.create') }}" class="btn btn-primary">新規作成</a>
        </x-slot>
        <x-slot name="cardBody">
            <x-parts.stripe_table_layout>
                <x-slot name="thead">
                    <tr>
                        <th scope="col" class="text-nowrap">タイトル</th>
                        <th scope="col" class="text-nowrap">本文</th>
                        <th scope="col" class="text-nowrap">作成日時</th>
                        <th scope="col" class="text-nowrap">更新日時</th>
                        <th scope="col" class="text-nowrap">操作</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @if($todos->isNotEmpty())
                        @foreach($todos as $todo)
                            <tr>
                                <td class="text-nowrap px-2">{{ $todo->title }}</td>
                                <td class="text-nowrap px-2">{{ Str::limit($todo->message, 50) }}</td>
                                <td class="text-nowrap px-2">{{ $todo->created_at->format('Y/m/d H:i') }}</td>
                                <td class="text-nowrap px-2">{{ $todo->updated_at->format('Y/m/d H:i') }}</td>
                                <td class="text-nowrap px-2">
                                    <a href="{{ route('todos.show', $todo) }}" class="btn btn-primary btn-sm">詳細</a>
                                    <a href="{{ route('todos.edit', $todo) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('本当に削除しますか？')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">データがありません</td>
                        </tr>
                    @endif
                </x-slot>
            </x-parts.stripe_table_layout>
        </x-slot>
    </x-parts.basic_card_layout>
    
@endsection
