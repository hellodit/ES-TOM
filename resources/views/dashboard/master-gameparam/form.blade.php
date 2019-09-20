@extends('layouts.admin.dashboard')
@section('title','Master Perilaku Anak')
@section('main-content')
<div class="section">
    <div class="section-header">
        <h1>{{$data['act']}}</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @include('layouts.admin.flash')

                <form action="{{route('save.gameparam')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Pilih
                            Permainan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="game">
                                <option value="" selected desabled> Pilih Permainan</option>
                                @foreach ($data['games'] as $game)
                                <option value="{{$game->id}}">{{$game->code.' - '.$game->name}}</option>
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
                                    <option value="{{$parameter->id}}">{{$parameter->code.' - '.$parameter->name}}</option>
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
    <script src="{{asset('stisla/assets/modules/select2/dist/js/select2.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.select2-multi').select2();
    });
    </script>

@endsection

@section('customcss')
    <link rel="stylesheet" href="{{asset('stisla/assets/modules/select2/dist/css/select2.css')}}">
@endsection

