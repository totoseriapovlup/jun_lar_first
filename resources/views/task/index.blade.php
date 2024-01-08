@extends('layouts.front')
@section('content')
    <!-- Bootstrap шаблон... -->
    <div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    <!-- Форма новой задачи -->
        <form action="{{ route('task.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task" class="{{ $errors->has('name') ? 'has-error' : '' }} form-control " value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add task
                    </button>
                </div>
            </div>
        </form>
    </div>
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Task list
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{ $task->id }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>
                            <td>
                                <form action="/task/{{ $task->id }}" method="post">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection