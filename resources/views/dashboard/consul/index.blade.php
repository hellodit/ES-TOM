@extends('layouts.admin.dashboard')
@section('title','Halaman Konsultasi')
@section('main-content')
<div class="section">
    <div class="section-header">
        <h1>Konsultasi</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <h4 class="title">PIlih salah satu kriteria yang sesuai dengan anak anda</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                                <p>
                                        Sorry we can't find any data, to get rid of this message, make at least 1 entry.
                                    </p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Second default radio
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                    value="option3" disabled>
                                <label class="form-check-label" for="exampleRadios3">
                                    Disabled radio
                                </label>
                            </div>
                            <div class="form-group pt-3">
                                    <input type="submit" value="Kirim" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('customcss')
<link rel="stylesheet" href="{{asset('stisla/assets/modules/summernote/summernote-bs4.css')}}">

@endsection

@section('customjs')

@endsection
