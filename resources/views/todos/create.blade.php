@extends('layouts.app')

@section('content')
    <x-parts.basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="mb-0"><i class="fas fa-plus"></i> Todo登録</h4>
            <a class="btn btn-secondary" href="{{ route('todos.index') }}">一覧へ戻る</a>
        </x-slot>
        <x-slot name="cardBody">
            <div class="common-card">
                <form method="POST" action="{{ route('todos.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label text-md-end">タイトル<x-parts.required_badge/></label>
                        <div class="col-md-6">
                            @include('components.form.text', ['name' => 'title', 'required' => true])
                            @include('components.form.error', ['name' => 'title'])
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="message" class="col-md-4 col-form-label text-md-end">本文<x-parts.required_badge/></label>
                        <div class="col-md-6">
                            @include('components.form.textarea', ['name' => 'message', 'required' => true])
                            @include('components.form.error', ['name' => 'message'])
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
        </x-slot>
    </x-parts.basic_card_layout>
@endsection
