@extends('template')

@section('content')
    <div id="contForPhotoModel">
        <i class="fa fa-times-circle noneCloseImg closeImg" id="closeImg" aria-hidden="true"></i>
        <div class="noneCloseImg" id="backImg">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
        </div>
        <img id='imgWindow' src="">
        <div class="noneCloseImg" id="nextImg">
            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row for_centr">
            <div class="col-12 nameModel">
                <h1>{{$model->name}}</h1>
            </div>
            <div class="col-md-12 col-sm-12 iPhone5 downBlock" id="contBlock">
                <div class="col-md-6 col-sm-12">
                    <div class="mainPicture">
                    <img class="img-fluid" src="{{ asset('/storage/' .  $model->main_photo )}}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div>
                        <div class="descriptionModel">
                            <div>
                                <p>Возраст / Age </p>
                                <p>{{$model->age}}</p>
                            </div>
                            <div>
                                <p>Рост / Height </p>
                                <p>{{$model->height}}</p>
                            </div>
                            <div>
                                <p>Вес / Weight </p>
                                <p>{{$model->weight}}</p>
                            </div>
                            <div>
                                <p>Параметры / Options </p>
                                <p>{{$model->parameters}}</p>
                            </div>
                            <div>
                                <p>Грудь / Chest </p>
                                <p>{{$model->chest}}</p>
                            </div>
                            <div>
                                <p>Город / City </p>
                                <p>{{$model->city}}</p>
                            </div>
                            <div>
                                <p>Страна / Country </p>
                                <p>{{$model->country}}</p>
                            </div>
                            <div class="followersInst">
                                <p>Подписчиков в Instagram <br/>
                                    Instagram Followers</p>
                                <p>{{$model->followers}}</p>
                            </div>
                            <div class="states">
                                <h4 class="state">Статус / Status</h4>
                                <h4>{{$model->achievements}}</h4>
                            </div>
                        </div>


                        <div class="collectionPictures col-md-10 col-sm-12 col-12">
                            @if (isset($model->one_photo))
                                <div class=" col-md-4 col-sm-4 col-6 forFloat">
                                    <div class="contPic">
                                        <img class="img-fluid imgModel"
                                             src="{{ asset('/storage/' .  $model->one_photo )}}">
                                    </div>
                                </div>
                            @endif
                            @if (isset($model->two_photo))
                                <div class=" col-md-4 col-sm-4 col-6 forFloat">
                                    <div class="contPic">

                                        <img class="img-fluid imgModel"
                                             src="{{ asset('/storage/' .  $model->two_photo )}}">
                                    </div>

                                </div>
                            @endif
                            @if (isset($model->three_photo))
                                <div class=" col-md-4 col-sm-4 col-6 forFloat">
                                    <div class="contPic">

                                        <img class="img-fluid imgModel"
                                             src="{{ asset('/storage/' .  $model->three_photo )}}">
                                    </div>

                                </div>
                            @endif
                            @if (isset($model->four_photo))
                                <div class=" col-md-4 col-sm-4 col-6 forFloat">
                                    <div class="contPic">

                                        <img class="img-fluid imgModel"
                                             src="{{ asset('/storage/' .  $model->four_photo )}}">
                                    </div>

                                </div>
                            @endif
                            @if (isset($model->five_photo))
                                <div class="col-md-4 col-sm-4 col-6 forFloat">
                                    <div class="contPic">

                                        <img class="img-fluid imgModel"
                                             src="{{ asset('/storage/' .  $model->five_photo )}}">
                                    </div>

                                </div>
                            @endif
                            @if (isset($model->six_photo))
                                <div class=" col-md-4 col-sm-4 col-6 forFloat">
                                    <div class="contPic">

                                        <img class="img-fluid imgModel"
                                             src="{{ asset('/storage/' .  $model->six_photo )}}">
                                    </div>

                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 request">
                <a href="https://wa.me/79190477597?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5,%20%D0%BC%D0%B5%D0%BD%D1%8F%20%D0%B7%D0%B0%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D0%BE%D0%B2%D0%B0%D0%BB%D0%B0%20%D0%BC%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C%20http://loftmodel/public/showModel/{{ $model->id }}">Оставить
                    заявку</a>
            </div>
        </div>
    </div>
    <script src="/public/js/onlyModel.js"></script>
    <script src="/public/js/oneModel.js"></script>
@endsection
