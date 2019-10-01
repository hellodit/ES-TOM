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
                @include('layouts.admin.flash')
                <div class="card card-primary">
                    <form action="{{route('dashboard.consul.proses')}}" method="post">
                        <div class="card-header card-primary">
                            <h4 class="title">PIlih salah satu kriteria yang sesuai dengan anak anda</h4>
                        </div>
                        <div class="card-body">
                            <p>Berdasarkan Kriteria yang telah dipilih sebelumnya  <b>{{empty($prevParam) ? 'kosong' : $prevParam->name }}</b>, maka pilih salah satu kemungkinan dibawah ini!</p>
                            <input type="hidden" name="step" value="{{empty($nextStep) ? '1' : $nextStep }}">
                            @csrf
                            @foreach ($params as $param)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="id" id="exampleRadios2"
                                    value="{{$param->id}}">
                                <label class="form-check-label" for="exampleRadios2">
                                    {{' [ '.$param->code.' ] '.$param->name}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            <div class="form-group">
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                                <input type="submit" value="Lanjutkan" class="btn btn-primary">

                            </div>
                        </div>
                    </form>

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
<style>

</style>
@endsection
