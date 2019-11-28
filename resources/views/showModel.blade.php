@extends('template')

@section('content')
    <div id="contForPhotoModel">
        <i class="fa fa-times-circle noneCloseImg closeImg" id="closeImg" aria-hidden="true"></i>
        <div class="noneCloseImg" id="backImg">
        <i class="fa fa-chevron-circle-left"  aria-hidden="true"></i>
        </div>
        <img id='imgWindow' src="">
        <div class="noneCloseImg" id="nextImg">
            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
        </div>
        </div>
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
                    <h4 class="col-md-6 col-xs-6">Количество подписчиков в Instagram: </h4>
                    <h4 class="col-md-6 col-xs-6">{{$model->followers}}</h4>
                </div>
                <div>
                    <h4 class="col-md-6 col-xs-12">Статус: </h4>
                    <h4 class="col-md-6 col-xs-12">{{$model->achievements}}</h4>
                </div>
                <div>
                    @if (isset($model->one_photo))
                    <div class="col-md-4 col-sm-12">
                        <img  class="img-fluid imgModel" src="{{ asset('/storage/' .  $model->one_photo )}}">
                    </div>
                    @endif
                    @if (isset($model->two_photo))
                    <div class="col-md-4 col-sm-12">
                        <img class="img-fluid imgModel" src="{{ asset('/storage/' .  $model->two_photo )}}">
                    </div>
                        @endif
                        @if (isset($model->three_photo))
                    <div class="col-md-4 col-sm-12">
                        <img class="img-fluid imgModel" src="{{ asset('/storage/' .  $model->three_photo )}}">
                    </div>
                        @endif
                        @if (isset($model->four_photo))
                    <div class="col-md-4 col-sm-12">
                        <img class="img-fluid imgModel" src="{{ asset('/storage/' .  $model->four_photo )}}">
                    </div>
                        @endif
                        @if (isset($model->five_photo))
                    <div class="col-md-4 col-sm-12">
                        <img class="img-fluid imgModel" src="{{ asset('/storage/' .  $model->five_photo )}}">
                    </div>
                        @endif
                        @if (isset($model->six_photo))
                    <div class="col-md-4 col-sm-12">
                        <img class="img-fluid imgModel" src="{{ asset('/storage/' .  $model->six_photo )}}">
                    </div>
                        @endif
                </div>

                <div>
                    <a href="https://wa.me/79190477597?text=%D0%A1%D0%B0%D1%88%D0%B0+%D0%BB%D0%BE%D1%85">Оставить заявку</a> <p></p>
                    <a href="https://t.me/joinchat/AAAAAEa8PaCFFmc9f4EWrA">Telegram</a>
                </div>
            </div>
    </div>
    <script src="/public/js/onlyModel.js"></script>
@endsection
