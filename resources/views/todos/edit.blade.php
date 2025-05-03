@extends('layouts.app')

@section('content')
    <x-parts.basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="mb-0"><i class="fas fa-edit"></i> Todo編集</h4>
            <a class="btn btn-secondary" href="{{ route('todos.index') }}">一覧へ戻る</a>
        </x-slot>
        <x-slot name="cardBody">
            <div class="common-card">
                <form method="POST" action="{{ route('todos.update', $todo) }}">
                    @csrf
                    @method('PATCH')

                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label text-md-end">タイトル<x-parts.required_badge/></label>
                        <div class="col-md-6">
                            @include('components.form.text', ['name' => 'title', 'value' => $todo->title, 'required' => true])
                            @include('components.form.error', ['name' => 'title'])
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="message" class="col-md-4 col-form-label text-md-end">本文<x-parts.required_badge/></label>
                        <div class="col-md-6">
                            @include('components.form.textarea', ['name' => 'message', 'value' => $todo->message, 'required' => true])
                            @include('components.form.error', ['name' => 'message'])
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </form>
            </div>
        </x-slot>
    </x-parts.basic_card_layout>
@endsection
