@if(count($errors))
    <strong>Упс! Что-то пошло не так!</strong>

    <ul class="bg-danger">
        @foreach($errors->all() as $error)
            <li class="m-5">{{ $error }}</li>
        @endforeach
    </ul>
@endif