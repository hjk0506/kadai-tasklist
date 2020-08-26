@extends('layouts.app')

@section('content')
    <h1 class="mb-2">タスク一覧</h1>

    <h5 class="mt-2" style="text-align: right;">ユーザー: {{ Auth::user()->name }}</h5>

    <a href="/tasks/create" class="btn btn-primary mt-2 col-2 mb-4 offset-md-10">タスク新規作成</a>

    @if (count($task) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Task</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($task as $tk)
                <tr>
                    {{-- タスク詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $tk->id, ['task' => $tk->id]) !!}</td>
                    <td>{{ $tk->content }}</td>
                    <td>{{ $tk->status }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    @endif

@endsection