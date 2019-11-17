@extends('template')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center">{{$model->name}}</h1>
            <div class="col-md-7 col-sm-12">
                <img class="img-fluid" src="{{ asset('/storage/' .  $model->main_photo )}}">
            </div>
            <div class="col-md-5 col-sm-12">
                <div>
                    <h4 class="col-md-6 col-xs-6">Возраст: </h4>
                    <h4 class="col-md-6 col-xs-6">{{$model->age}}</h4>
                </div>
                <div>
                    <h4 class="col-md-6 col-xs-6">Рост: </h4>
                    <h4 class="col-md-6 col-xs-6">{{$model->height}}</h4>
                </div>
                <div>
                    <h4 class="col-md-6 col-xs-6">Вес: </h4>
                    <h4 class="col-md-6 col-xs-6">{{$model->weight}}</h4>
                </div>
                <div>
                    <h4 class="col-md-6 col-xs-6">Параметры: </h4>
                    <h4 class="col-md-6 col-xs-6">{{$model->parameters}}</h4>
                </div>
                <div>
                    <h4 class="col-md-6 col-xs-6">Грудь: </h4>
                    <h4 class="col-md-6 col-xs-6">{{$model->chest}}</h4>
                </div>
                <div>
                    <h4 class="col-md-6 col-xs-6">Город: </h4>
                    <h4 class="col-md-6 col-xs-6">{{$model->city}}</h4>
                </div>
                <div>
                    <h4 class="col-md-6 col-xs-6">Страна: </h4>
                    <h4 class="col-md-6 col-xs-6">{{$model->country}}</h4>
                </div>
                <div>
                    <h4 class="col-md-6 col-xs-6">Количество подписчиков: </h4>
                    <h4 class="col-md-6 col-xs-6">{{$model->followers}}</h4>
                </div>
                <div>
                    <h4 class="col-md-6 col-xs-12">Достижения: </h4>
                    <h4 class="col-md-6 col-xs-12">{{$model->achievements}}</h4>
                </div>
                <div>
                    <a href="https://wa.me/79190477597?text=%D0%A1%D0%B0%D1%88%D0%B0+%D0%BB%D0%BE%D1%85">Оставить заявку</a> <p></p>
                    <a href="https://t.me/joinchat/AAAAAEa8PaCFFmc9f4EWrA">Telegram</a>
                </div>
        </div>
    </div>
@endsection
