@extends('template')

@section('content')
    @foreach($models as $model)
        <li>
            <a href="/public/showModel/{{$model->id}}">
                {{$model->name}}
            </a>
        </li>
    @endforeach
@endsection
