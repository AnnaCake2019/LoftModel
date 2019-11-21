@extends('adminStart')

@section('content')
    <a class="back" href="/public/admin/modelsA"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>

    <div class="container">
        <div class="row">
            <div class="offset-1 col-10 title_models">
                <h3>НАШИ МОДЕЛИ</h3>
            </div>
                @foreach($models as $model)
                    <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 for_model_admin cont_for_models">
                        <a class="del" href="/public/admin/destroy/{{$model->id}}">X</a>
                        <a class="link_model" href="/public/showModel/{{$model->id}}">{{$model->name}}</a>
                        <div class="cont_for_model">
                            <a href="/public/showModel/{{$model->id}}">
                                <img src="{{ asset('/storage/' . $model->main_photo) }}">
                                <div class="info_model">
                                    <p>Возраст/Age: {{$model->age}}</p>
                                    <p>Рост/Height: {{$model->height}}</p>
                                    <p>Вес/Weight: {{$model->weight}}</p>
                                    <p>Грудь/Chest: {{$model->chest}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection
