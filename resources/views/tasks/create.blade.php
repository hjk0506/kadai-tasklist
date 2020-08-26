@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    <h5 class="mt-2" style="text-align: right;">ユーザー: {{ Auth::user()->name }}</h5>

    <a href="/tasks/" class="btn btn-primary mt-2 col-2 mb-4 offset-md-10">タスク一覧へ</a>
    <div class="row">
        <div class="col-6">

            {!! Form::model($task, ['route' => 'tasks.store']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'Task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection