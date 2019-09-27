@extends('layouts.admin.dashboard')
@section('title','Master Perilaku Anak')
@section('main-content')
<div class="section">
    <div class="section-header">
        <h1>Hasil Konsultasi</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Biodata</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <td>Nama</td>
                                    <td>{{Auth::user()->name}}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Konsultasi</td>
                                    <td>{{date("Y-m-d")}}
                                </td>
                                </tr>
                                <tr>
                                    <td>Alamat Email</td>
                                    <td>{{Auth::user()->email}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Hasil Permainan</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($game as $itemga)
                            <h3>{{$itemga->name}}</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{asset("uploads/images/".$itemga->image)}}" class="img-thumbnail" alt="">
                                </div>
                                <div class="col-md-9">
                                        {!!$itemga->description!!}
                                        <p class="mb-2"><span class="badge badge-primary">Kode Permainan : {{$itemga->code}}</span> <span class="badge badge-primary">Kategori : {{$itemga->category}}</span> </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                                <h4>Pengisian Konsultasi</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    @foreach ($params as $key => $item)
                                        <tr>
                                            <td>{{$key}}</td>
                                            @foreach ($item as $itemm)
                                                <td>{{$itemm->name}}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
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
