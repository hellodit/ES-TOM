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
                                    <td>Nama Orang tua</td>
                                    <td>{{$history->user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Email</td>
                                    <td>{{$history->user->email}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Anak</td>
                                    <td>{{$history->childname}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>{{$history->gender == 'L' ? 'Laki-laki' : 'Perempuan'}}</td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>Tannggal Lahir</td>
                                    <td>{{$history->birthday}}</td>
                                </tr>
                                <tr>
                                    <td>Usia Saat ini</td>
                                    <td>{{hitungusia($history->birthday)}}</td>
                                </tr>

                                <td>Tanggal Konsultasi</td>
                                <td>{{indo_date($history->created_at,true)}}
                                </td>
                                </tr>
                                <tr>
                                    <td>Status Konsultasi</td>
                                    <td>{!! consts($history->status)!!}</td>
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
                        @if (!empty($history->rule))
                        <h3>{{$history->rule->game->name}}</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset("uploads/images/".$history->rule->game->image)}}"
                                    class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-9">
                                {!!$history->rule->game->description!!}
                                <p class="mb-2"><span class="badge badge-primary">Kode Permainan :
                                        {{$history->rule->game->code}}</span> <span class="badge badge-primary">Kategori
                                        : {{$history->rule->game->category}}</span> </p>
                            </div>
                        </div>
                        @else
                        <div class="empty-state" data-height="400" style="height: 400px;">
                            <div class="empty-state-icon bg-danger">
                                <i class="fas fa-times"></i>
                            </div>
                            <h2>Mohon Maaf :(</h2>
                            <p class="lead">
                                Untuk saat ini tidak ditemukan jenis permainan edukasi yang sesuai dengan kriteria anak
                                anda. kami akan terus melakukan pembaharuan untuk memberikan lebih banyak pilihan.
                            </p>
                            <a href="{{route('dashboard.consul')}}" class="btn btn-warning mt-4">Coba Lagi</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @if (!empty($history->rule))
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
                                @foreach ($history->rule->params as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{strip_tags($item->name)}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>
</div>


@endsection
@section('customcss')
<link rel="stylesheet" href="{{asset('stisla/assets/modules/summernote/summernote-bs4.css')}}">

@endsection

@section('customjs')

@endsection
