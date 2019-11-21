@extends('adminStart')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-4 col-4">
                <ul class="nav navMA">
                    <li>
                        Where will we go?
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="admin/modelsA">Hall Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/modelsAV">Hall Vip Models</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="album" href="admin/albumA">Album</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
