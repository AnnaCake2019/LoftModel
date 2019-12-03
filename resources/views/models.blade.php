@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-1 col-10 title_models">
                <h3>НАШИ МОДЕЛИ</h3>
            </div>
            <div class="col-12 downBlock " id="upBlock">
                @foreach($models as $model)
                    <div class=" col-xl-4 col-md-4 col-sm-6 col-xs-6 col-4 cont_for_models">
                        <a class="link_model" href="/public/showModel/{{$model->id}}">{{$model->name}}</a>
                        <div class="cont_for_model">
                            <a href="/public/showModel/{{$model->id}}">
                                <img src="{{ asset('/storage/' . $model->main_photo) }}">
                                <div class="info_model">
                                    <p class="inf_about">Возраст / Age: {{$model->age}}</p>
                                    <p class="inf_about">Рост / Height: {{$model->height}}</p>
                                    <p class="inf_about"> Вес / Weight: {{$model->weight}}</p>
                                    <p class="inf_about">Грудь / Chest: {{$model->chest}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <script src="/public/js/appModel.js"></script>
@endsection
