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
                        @if (!$selectedRule->isEmpty())
                            @foreach ($selectedRule as $rule)
                                <h3>{{$rule->game->name}}</h3>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{asset("uploads/images/".$rule->game->image)}}" class="img-thumbnail" alt="">
                                    </div>
                                    <div class="col-md-9">
                                            {!!$rule->game->description!!}
                                            <p class="mb-2"><span class="badge badge-primary">Kode Permainan : {{$rule->game->code}}</span> <span class="badge badge-primary">Kategori : {{$rule->game->category}}</span> </p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        <h3>Mohon maaf saat ini data tidak ditemukan</h3>
                        @endif
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
                        {{-- {{dd($selected)}} --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <thead>
                                            <tr>
                                                    <td>Variabel</td>
                                                    <td>Parameter</td>
                                                </tr>
                                    </thead>
                                    @foreach ($selected as $key => $item)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{strip_tags($item->name)}}</td>
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
