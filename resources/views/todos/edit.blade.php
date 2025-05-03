@extends('layouts.app')

@section('content')
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            <i class="fas fa-edit mr-2"></i>Todo編集
        </h3>
        <a href="{{ route('todos.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
            一覧へ戻る
        </a>
    </div>
    <div class="border-t border-gray-200">
        <div class="px-4 py-5 sm:p-6">
            <form method="POST" action="{{ route('todos.update', $todo) }}" class="space-y-6">
                @csrf
                @method('PATCH')

                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">
                            タイトル<span class="text-red-500">*</span>
                        </label>
                        <div class="mt-1">
                            <input type="text" name="title" id="title" value="{{ $todo->title }}" required
                                class="shadow-sm focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            @error('title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">
                            本文<span class="text-red-500">*</span>
                        </label>
                        <div class="mt-1">
                            <textarea name="message" id="message" rows="4" required
                                class="shadow-sm focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $todo->message }}</textarea>
                            @error('message')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-400 hover:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        更新
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
