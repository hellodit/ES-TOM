@extends('layouts.admin.dashboard')
@section('title','Daftar Permainan Edukasi')
@section('main-content')
<div class="section">
    <div class="section-header">
        <h1>Daftar Permainan Edukasi</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Permainan Edukasi yang terdaftar dalam sistem</h2>
        <p class="section-lead">
            Berikut ini adalah daftar permainan edukasi yang terdaftar dalam sistem, permainan akan diperbaharui secara
            berkala.
        </p>
    </div>
</div>

<div class="row">
    @foreach ($games as $game)
    <div class="col-12 col-md-4 col-lg-4">
        <article class="article article-style-c">
            <div class="article-header">
                <div class="article-image"
                    data-background="{{!empty($game->image) ? asset("uploads/images/".$game->image) : asset('stisla/assets/img/news/img13.jpg')}}"
                    style="background-image: url('{{!empty($game->image) ? asset("uploads/images/".$game->image) : asset('stisla/assets/img/news/img13.jpg')}}');">
                </div>
            </div>
            <div class="article-details">
                <div class="article-category"><a href="#">Kode Permainan</a>
                    <div class="bullet"></div> <a href="#">{{$game->code}}</a>
                </div>
                <div class="article-title">
                    <h2><a href="#">{{$game->name}}</a></h2>
                </div>
                <p>{!!$game->description!!} </p>
                <div class="article-user">
                    <div class="article-user-details">
                        <span class="badge badge-primary">Kategori : {{$game->category}}</span>
                    </div>
                </div>
            </div>
        </article>
    </div>
    @endforeach

</div>


@endsection


@section('customcss')
<link rel="stylesheet" href="{{asset('vendor/bootrap-fileinput/css/fileinput.css')}}">
<link rel="stylesheet" href="{{asset('stisla/assets/modules/summernote/summernote-bs4.css')}}">

@endsection
@section('customjs')
<script src="{{asset('vendor/bootrap-fileinput/js/fileinput.js')}}"></script>
<script src="{{asset('vendor/bootrap-fileinput/themes/fas/theme.js')}}"></script>
<script src="{{asset('stisla/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('stisla/assets/modules/sweetalert/sweetalert.min.js')}}"></script>

@endsection
