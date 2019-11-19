@extends('admin.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6">
                <form class="formModels" action="save" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <div class="inf"><label>Главное фото</label><input name="main_photo" id="oneFile" type="file"></div>
                    <div class="allPhoto">
                        <label>Фото 1<input name="one_photo" type="file"></label>
                        <label>Фото 2<input name="two_photo" type="file"></label>
                        <label>Фото 3<input name="three_photo" type="file"></label>
                        <label>Фото 4<input name="four_photo" type="file"></label>
                        <label>Фото 5<input name="five_photo" type="file"></label>
                        <label>Фото 6<input name="six_photo" type="file"></label>
                    </div>
                    <div class="inf"><label>Имя</label><input name="name" type="text"></div>
                    <div class="inf"><libel>Лет</libel><input name="age" type="text"></div>
                    <div class="inf"><libel>Рост</libel><input name="height" type="text"></div>
                    <div class="inf"><libel>Вес</libel><input name="weight" type="text"></div>
                    <div class="inf"><libel>Параметры</libel><input name="parameters" type="text"></div>
                    <div class="inf"><libel>Грудь</libel><input name="chest" type="text"></div>
                    <div class="inf"><libel>Страна</libel><input name="country" type="text"></div>
                    <div class="inf"><libel>Город</libel><input name="city" type="text"></div>
                    <div class="inf"><libel>Подписчиков</libel><input name="followers" type="text"></div>
                    <div class="inf"><libel>Достижения</libel><input name="achievements" type="text"></div>
                    <div class="inf"><libel>От кого</libel><input name="from_who" type="text"></div>
                    <input type="submit" value="Опубликовать">
                </form>
            </div>
        </div>
    </div>
    <script src="/public/js/admin/app.js"></script>
@endsection
