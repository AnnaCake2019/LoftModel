@extends('adminStart')

@section('content')
    <a class="back" href="/public/"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>

    <div class="container">
        <div class="row">
            <div class="offset-4 col-4">
                <ul class="nav navMA">
                    <li>
                        Where will we go?
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Admin/ModelsA">Hall Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Admin/ModelsAV">Hall Vip Models</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="album" href="Admin/AlbumA">Album</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
