@extends('layouts.admin.dashboard')
@section('title','Master Perilaku Anak')
@section('customcss')
<link rel="stylesheet" href="{{asset('stisla/assets/modules/select2/dist/css/select2.min.css')}}">
@endsection
@section('main-content')
<div class="section">
    <div class="section-header">
        <h1>{{$data['act']}}</h1>
    </div>
</div>
{{-- {{dd($data['rule'])}} --}}
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @include('layouts.admin.flash')
                <form action="{{$data['url']}}" method="{{$data['action']}}">
                    @csrf

                    <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Nama Aturan</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="" value="{{!empty($data['rule']) ? $data['rule']->name  : null }}">
                            </div>
                    </div>


                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Pilih
                            Permainan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="game">
                                <option value="" selected desabled> Pilih Permainan</option>
                                @foreach ($data['games'] as $game)
                                    <option value="{{$game->id}}" {{!empty($data['rule']->game->id) ? $data['rule']->game->id == $game->id ? 'selected' : null : null  }}>{{$game->code.' - '.$game->name}}</option>
                                @endforeach
                            </select>

                            @error('game')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Parameter</label>
                        <div class="col-sm-9">
                            <select class="form-control select2-multi" name="params[]" multiple="multiple">
                                @foreach ($data['parameters'] as $parameter)
                                    <option value="{{$parameter->id}}"
                                        @if (!empty($data['rule']->params))
                                            @foreach ($data['rule']->params as $selectedparams)
                                                @if ($selectedparams->id == $parameter->id )
                                                    {{'selected'}}
                                                @endif
                                            @endforeach
                                        @endif
                                >{{$parameter->code.' - '.strip_tags($parameter->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customjs')
    <script src="{{asset('stisla/assets/modules/select2/dist/js/select2.full.min.js')}}"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.select2-multi').select2();
    });
    </script>

@endsection



