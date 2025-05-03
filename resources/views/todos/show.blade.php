@extends('layouts.app')

@section('content')
    <x-parts.basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="mb-0"><i class="fas fa-info-circle"></i> Todo詳細</h4>
            <a class="btn btn-secondary" href="{{ route('todos.index') }}">一覧へ戻る</a>
        </x-slot>
        <x-slot name="cardBody">
            <div class="common-card">
                <div class="row mb-3">
                    <div class="col-md-4 text-md-end">
                        <strong>タイトル</strong>
                    </div>
                    <div class="col-md-6">
                        {{ $todo->title }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 text-md-end">
                        <strong>本文</strong>
                    </div>
                    <div class="col-md-6">
                        {{ $todo->message }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 text-md-end">
                        <strong>作成日時</strong>
                    </div>
                    <div class="col-md-6">
                        {{ $todo->created_at->format('Y/m/d H:i') }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 text-md-end">
                        <strong>更新日時</strong>
                    </div>
                    <div class="col-md-6">
                        {{ $todo->updated_at->format('Y/m/d H:i') }}
                    </div>
                </div>
            </div>
        </x-slot>
    </x-parts.basic_card_layout>
@endsection
