@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-1 col-10 title_models">
                <h3 class="ru">НАШИ МОДЕЛИ</h3>
                <h3 class="en">OUR MODELS</h3>
                <p class="ru">Полный ассортимент моделей у нас в <a  href="https://instagram.com/loft_model?igshid=1139iivniji2v">Instagram</a>, аккаунт закрыт.<br/>
                    <strong>Для просмотра анкет укажите личным сообщение что вы с сайта.</strong></p>
                <p class="en">The full range of models we have in <a  href="https://instagram.com/loft_model?igshid=1139iivniji2v">Instagram</a>,
                    account is closed.<br/>
                    To view profiles, indicate in a personal message that you are from the site.
                </p>
            </div>
            <div class="col-12 downBlock " id="upBlock">
                @foreach($models as $model)
                    <div class=" col-xl-4 col-md-4 col-sm-4 col-xs-6 col-4 cont_for_models">
                        <a class="link_model" href="/public/showModel/{{$model->id}}">{{$model->name}}</a>
                        <div class="cont_for_model">
                            <a href="/public/showModel/{{$model->id}}">
                                <img src="{{ asset('/storage/' . $model->main_photo) }}">
                                <div class="info_model ru">
                                    <p class="inf_about">Возраст: {{$model->age}}</p>
                                    <p class="inf_about">Рост: {{$model->height}}</p>
                                    <p class="inf_about"> Вес: {{$model->weight}}</p>
                                    <p class="inf_about">Грудь: {{$model->chest}}</p>
                                </div>
                                <div class="info_model en">
                                    <p class="inf_about">Age: {{$model->age}}</p>
                                    <p class="inf_about">Height: {{$model->height}}</p>
                                    <p class="inf_about">Weight: {{$model->weight}}</p>
                                    <p class="inf_about">Chest: {{$model->chest}}</p>
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
