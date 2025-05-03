{{-- スモールにしたいときは<x-parts.basic_table_layout sm>とする --}}
<div class="table-responsive">
    <table class="table table-hover table-condensed table-list table-striped @isset($sm) table-sm @endisset">
        {{-- テーブルヘッダーの色変更可能 --}}
        <thead class="table-primary">
            {{ $thead }}
        </thead>
        <tbody style="border-style: none">
            {{ $tbody }}
        </tbody>
    </table>
</div>