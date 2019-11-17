@extends('template')

@section('content')
    <div class="container-fluid">
        @foreach($models as $model)
            <div class="col-lg-3">
                <h2><a href="/public/showModel/{{$model->id}}">{{$model->name}}</a></h2>
                <img src="{{ asset('/storage/' . $model->main_photo) }}">
            </div>
        @endforeach
    </div>

@endsection
