@if (count($errors) > 0)

    <div class="alert alert-danger">
        <div class="mt-2"><b>有错误发生:</b></div>
        <ul class="mt-2 mb-2">
            @foreach ($errors->all() as $errors)
                <li><i class="glyphicon glyphicon-remove">{{ $errors }}</i></li>
            @endforeach
        </ul>
    </div>

@endif