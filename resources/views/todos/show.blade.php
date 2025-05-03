@extends('layouts.app')

@section('content')
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            <i class="fas fa-info-circle mr-2"></i>Todo詳細
        </h3>
        <a href="{{ route('todos.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            一覧へ戻る
        </a>
    </div>
    <div class="border-t border-gray-200">
        <div class="px-4 py-5 sm:p-6">
            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">タイトル</label>
                    <div class="mt-1">
                        <p class="text-sm text-gray-900">{{ $todo->title }}</p>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">本文</label>
                    <div class="mt-1">
                        <p class="text-sm text-gray-900 whitespace-pre-line">{{ $todo->message }}</p>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">作成日時</label>
                    <div class="mt-1">
                        <p class="text-sm text-gray-900">{{ $todo->created_at->format('Y/m/d H:i') }}</p>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">更新日時</label>
                    <div class="mt-1">
                        <p class="text-sm text-gray-900">{{ $todo->updated_at->format('Y/m/d H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
