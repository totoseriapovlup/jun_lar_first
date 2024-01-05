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
                    <input type="text" name="name" id="task" class="form-control">
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
    <!-- TODO: Текущие задачи -->
@endsection