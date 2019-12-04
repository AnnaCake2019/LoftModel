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
{{--                        <a class="del" href="/public/admin/destroy/{{$model->id}}">X</a>--}}
                        <a class="link_model" href="/public/admin/adminModel/{{$model->id}}">{{$model->name}}</a>
                        <div class="cont_for_model">
                            <a href="/public/admin/adminModel/{{$model->id}}">
                                <img src="{{ asset('/storage/' . $model->main_photo) }}">
                                <div class="info_model">
                                    <p>Возраст/Age: {{$model->age}}</p>
                                    <p>Рост/Height: {{$model->height}}</p>
                                    <p>Вес/Weight: {{$model->weight}}</p>
                                    <p>Грудь/Chest: {{$model->chest}}</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <form action="delete" method="get" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input style="display: none;" type="text" name="id" value="{{$model->id}}">
                                <input style="display: none;" type="text" name="main_photo" value="{{$model->main_photo}}">
                                <input style="display: none;" type="text" name="one_photo" value="{{$model->one_photo}}">
                                <input style="display: none;" type="text" name="two_photo" value="{{$model->two_photo}}">
                                <input style="display: none;" type="text" name="three_photo" value="{{$model->three_photo}}">
                                <input style="display: none;" type="text" name="four_photo" value="{{$model->four_photo}}">
                                <input style="display: none;" type="text" name="five_photo" value="{{$model->five_photo}}">
                                <input style="display: none;" type="text" name="six_photo" value="{{$model->six_photo}}">
                                <input type="submit" value="Удалить">
                            </form>
                        </div>
                    </div>


                @endforeach
        </div>
    </div>
@endsection
