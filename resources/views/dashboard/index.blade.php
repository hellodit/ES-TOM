@extends('layouts.admin.dashboard')
@section('title','Dashboard')
@section('main-content')
<section class="section">
    <div class="section-body">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>


            <div class="hero bg-primary text-white mb-2">
                <div class="hero-inner">
                    <h2>Selamat datang, {{Auth::user()->name}}!</h2>
                    <p class="lead">Saat ini anda masuk sebagai {!!Auth::user()->type === 'admin' ?
                        '<mark><i>Admin</i></mark> anda dapat melakukan manajemen keseluruhan sistem termasuk membuat
                        aturan' : '<mark><i>Orang tua</i></mark> anda dapat mengisi kuisoner untuk mendapatkan
                        rekomendasi permainan edukasi yang sesuai dengan karakteristik anak anda' !!}. </p>
                    <div class="mt-4">
                        <a href="{{route('dashboard.consul')}}"
                            class="btn btn-outline-white btn-lg btn-icon icon-left"><i
                                class="far fa-question-circle"></i>Lihat Kuisoner</a>
                        <a href="{{route('dashboard.games.list')}}" class="pl-3 text-white"> <ins>Lihat Daftar
                                Permainan<i class="fas fa-chevron-circle-right"></i></ins></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Penguna</h4>
                            </div>
                            <div class="card-body">
                                {{$data['users']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Permainan</h4>
                            </div>
                            <div class="card-body">
                                {{$data['games']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Parameter</h4>
                            </div>
                            <div class="card-body">
                                {{$data['params']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Aturan</h4>
                            </div>
                            <div class="card-body">
                                {{$data['rule']}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- @can('admin-only', Auth::User())
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Riwayat Konsultasi</h4>
                            </div>
                            <div class="card-body">
                                <div id="transactiondata">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan --}}
    </div>
</section>
@endsection
@section('customjs')
<script>
    $(document).ready(function(){
        $("#transactiondata").load('{{url("dashboard/transaction/data")}}');

        $(document).on('click','.pagination a',function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page)
        })

        function fetch_data(page){
            $.ajax({
                url: "{{url('dashboard/transaction/data?page=')}}"+page,
                success:function(data){
                    $("#transactiondata").html(data);
                }
            })
        }
    });
</script>
@endsection
