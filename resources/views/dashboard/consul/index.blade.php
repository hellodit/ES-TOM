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
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section-title">Nama Anak</div>
                                    <div class="form-group">
                                        <label for="childName">Tulis nama anak anda untuk memudahkan dikemudian hari</label>
                                        <input type="text" name="childName" placeholder="Tulis disini nama anak anda..." id="" class="form-control  @error('childName')  is-invalid @enderror " value="{{ old('childName') }}">
                                    @error('childName')
                                        <div class="invalid-feedback d-block">
                                            <p></p>{{ $message }}
                                        </div>
                                    @enderror

                                    </div>



                                    <div class="section-title">Tanggal Lahir</div>
                                        <div class="form-group">
                                                <label>Tulis Tanggal lahir anak dengan format Tahun/bulan/tanggal</label>
                                                <input type="text" class="form-control datepicker  @error('birthday')  is-invalid @enderror" name="birthday" value="{{ old('birthday') }}">
                                            @error('birthday')
                                                <div class="invalid-feedback d-block">
                                                    <p></p>{{ $message }}
                                                </div>
                                            @enderror
                                        </div>


                                    <div class="section-title">Jenis Kelamin</div>
                                    <div class="form-group">
                                            <label>Pilih sesuai jenis kelamin anak anda</label>
                                            <select class="form-control select2  @error('gender')  is-invalid @enderror" name="gender">
                                                @php
                                                    $genders = ['L','P']
                                                @endphp
                                                    <option value="" desabled> Pilih Jenis kelamin anak</option>
                                                    @foreach ($genders as $gender)
                                                        <option value="{{$gender}}" {{!empty(old('gender')) ? (old('gender') == $gender) ? 'selected' : null : null }}> {{$gender == 'L' ? 'Laki - Laki' : 'Perempuan'}}</option>
                                                    @endforeach

                                            </select>

                                        @error('gender')
                                            <div class="invalid-feedback d-block">
                                                <p></p>{{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                        <div class="section-title">Rentang usia anak saat ini</div>
                                        @foreach ($params['ages'] as $key => $age)
                                            <div class="custom-control custom-radio">
                                            <input type="radio" id="age-{{$key}}" value="{{$age->id}}" name="age" class="custom-control-input  @error('age') is-invalid @enderror" {{!empty(old('age')) ? (old('age') == $age->id) ? 'checked' : null : null }}>
                                                <label class="custom-control-label" for="age-{{$key}}">{{strip_tags($age->name)}}</label>
                                            </div>
                                        @endforeach


                                        @error('age')
                                            <div class="invalid-feedback d-block">
                                                <p></p>{{ $message }}
                                            </div>
                                        @enderror


                                        <div class="section-title">Kecenderungan anak menerima informasi</div>
                                        @foreach ($params['edus'] as $key => $edu)
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="edu-{{$key}}" value="{{$edu->id}}" name="edu" class="custom-control-input  @error('edu') is-invalid @enderror" {{!empty(old('edu')) ? (old('edu') == $edu->id) ? 'checked' : null : null }}>
                                                <label class="custom-control-label" for="edu-{{$key}}">{{strip_tags($edu->name)}}</label>
                                            </div>
                                        @endforeach
                                        @error('edu')
                                            <div class="invalid-feedback d-block">
                                                <p></p>{{ $message }}
                                            </div>
                                        @enderror

                                        <div class="section-title">Kemampuan memahami nilai agama dan moral yang dimiliki oleh anak</div>
                                        @foreach ($params['moralities'] as $key => $morality)
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="morality-{{$key}}" value="{{$morality->id}}" name="morality" class="custom-control-input  @error('morality') is-invalid @enderror"  {{!empty(old('morality')) ? (old('morality') == $morality->id) ? 'checked' : null : null }}>
                                                <label class="custom-control-label" for="morality-{{$key}}">{{strip_tags($morality->name)}}</label>
                                            </div>
                                        @endforeach

                                        @error('morality')
                                            <div class="invalid-feedback d-block">
                                                <p></p>{{ $message }}
                                            </div>
                                        @enderror



                                </div>
                                <div class="col-md-6">
                                        <div class="section-title">Kemampuan fisik dan motorik yang dimiliki oleh anak</div>
                                        @foreach ($params['physicals'] as $key => $physical)
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="physical-{{$key}}" value="{{$physical->id}}" name="physical" class="custom-control-input  @error('physical') is-invalid @enderror" {{!empty(old('physical')) ? (old('physical') == $physical->id) ? 'checked' : null : null }}>
                                                <label class="custom-control-label" for="physical-{{$key}}">{{strip_tags($physical->name)}}</label>
                                            </div>
                                        @endforeach
                                        @error('physical')
                                        <div class="invalid-feedback d-block">
                                            <p></p>{{ $message }}
                                        </div>
                                        @enderror


                                        <div class="section-title">Kemampuan Kognitif yang dimiliki anak</div>
                                        @foreach ($params['cognitivies'] as $key => $cognitiv)
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="cognitiv-{{$key}}" value="{{$cognitiv->id}}" name="cognitiv" class="custom-control-input  @error('cognitiv') is-invalid @enderror"  {{!empty(old('cognitiv')) ? (old('cognitiv') == $cognitiv->id) ? 'checked' : null : null }}>
                                                <label class="custom-control-label" for="cognitiv-{{$key}}">{{strip_tags($cognitiv->name)}}</label>
                                            </div>
                                        @endforeach
                                        @error('cognitiv')
                                            <div class="invalid-feedback d-block">
                                                <p></p>{{ $message }}
                                            </div>
                                        @enderror

                                        <div class="section-title">Kemampuan memahami dan mengungkapkan perasaan melalui bahasa</div>
                                        @foreach ($params['langs'] as $key => $lang)
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="lang-{{$key}}" name="lang" value="{{$lang->id}}" class="custom-control-input  @error('lang') is-invalid @enderror" {{!empty(old('lang')) ? (old('lang') == $lang->id) ? 'checked' : null : null }}>
                                                <label class="custom-control-label" for="lang-{{$key}}">{{strip_tags($lang->name)}}</label>
                                            </div>
                                        @endforeach

                                        @error('lang')
                                        <div class="invalid-feedback d-block">
                                            <p></p>{{ $message }}
                                        </div>
                                        @enderror

                                    <div class="section-title">Kemampuan anak dalam mengungkapkan emosi yang sedang dirasakan serta kemampuan bersosialisasi yang dimiliki</div>
                                    @foreach ($params['social'] as $key => $social)
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="social-{{$key}}" name="social" value="{{$social->id}}" class="custom-control-input  @error('social') is-invalid @enderror" {{!empty(old('social')) ? (old('social') == $social->id) ? 'checked' : null : null }}>
                                            <label class="custom-control-label" for="social-{{$key}}">{{strip_tags($social->name)}}</label>
                                        </div>
                                    @endforeach
                                    @error('social')
                                    <div class="invalid-feedback d-block">
                                        <p></p>{{ $message }}
                                    </div>
                                    @enderror


                                    <div class="section-title">Tipe permainan yang dinginkan orang tua</div>
                                    @foreach ($params['games'] as $key => $game)
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="game-{{$key}}" name="game" value="{{$game->id}}" class="custom-control-input  @error('game') is-invalid @enderror" {{!empty(old('game')) ? (old('game') == $game->id) ? 'checked' : null : null }} >
                                            <label class="custom-control-label" for="game-{{$key}}">{{strip_tags($game->name)}}</label>
                                        </div>
                                    @endforeach
                                    @error('game')
                                    <div class="invalid-feedback d-block">
                                        <p></p>{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

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
<link rel="stylesheet" href="{{asset('stisla/assets/modules/bootstrap-daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{asset('stisla/assets/modules/select2/dist/css/select2.min.css')}}">

@endsection

@section('customjs')
<script src="{{asset('stisla/assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('stisla/assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script>
    $('.select2').select2();

if(jQuery().daterangepicker) {
    if($(".datepicker").length) {
      $('.datepicker').daterangepicker({
        locale: {format: 'YYYY-MM-DD'},
        singleDatePicker: true,
      });
    }
  }


</script>
@endsection
