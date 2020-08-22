@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

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
                
                @foreach ($task as $task)
                <tr>
                    {{-- タスク詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>                    
                </tr>
                @endforeach

            </tbody>
        </table>
    @endif

@endsection