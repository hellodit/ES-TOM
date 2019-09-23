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
                                    <td>Bambang</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Konsultasi</td>
                                    <td>24 Maret 2019</td>
                                </tr>
                                <tr>
                                    <td>Alamat Email</td>
                                    <td>bambang@bam.com</td>
                                </tr>
                                <tr>
                                    <td>Nama Anak</td>
                                    <td>Suketi Mujiono</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Pengisian Konsultasi</h4>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, </p>
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
                                    <tr>
                                        <td>Nama</td>
                                        <td>Bambang</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Konsultasi</td>
                                        <td>24 Maret 2019</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Email</td>
                                        <td>bambang@bam.com</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Anak</td>
                                        <td>Suketi Mujiono</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Anak</td>
                                        <td>Suketi Mujiono</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Anak</td>
                                        <td>Suketi Mujiono</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Anak</td>
                                        <td>Suketi Mujiono</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Anak</td>
                                        <td>Suketi Mujiono</td>
                                    </tr>
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
