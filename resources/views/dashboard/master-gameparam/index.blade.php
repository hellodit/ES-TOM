@extends('layouts.admin.dashboard')
@section('title','Master Perilaku Anak')
@section('main-content')
<div class="section">
    <div class="section-header">
            <h1>Master Basis Pengatahuan</h1>
    </div>
</div>
@include('layouts.flash-msg')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                    <a href="{{url('dashboard/gameparam/form')}}"  class="btn btn-primary ">Tambah Basis Pengatahuan</a>
                    <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Permainan</th>
                            <th scope="col">Parameter</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!$gameparams->isEmpty())
                        @foreach ($gameparams as $nom => $gameparam)
                        <tr>
                            <td data-label="No">{{ ($gameparams->currentpage()-1) * $gameparams->perpage() + $nom + 1 }}</td>
                            <td data-label="kode">{{$gameparam->game->getCodeName()}}</td>
                            <td data-label="kode">{{$gameparam->parameter->getCodeName()}}</td>
                            <td data-label="Action">
                                <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete','{{$gameparam->id}}')"><i class="fas fa-trash"></i></a>
                                </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="4">Maaf, data belum tersedia</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {!! $gameparams->render() !!}
            </div>
        </div>

    </div>
</div>
@endsection


@section('customjs')
<script src="{{asset('stisla/assets/modules/sweetalert/sweetalert.min.js')}}"></script>
<script>
    function actControl(x, y, z) {
        if (x == "data") {
            $("#data-display").load('{{url("dashboard/behaviors/data")}}');
        } else if (x == "form") {
            $("#form-display").load('{{url("dashboard/behavior/form")}}' + "/" + (!y ? "" : y));
        } else if (x == "delete") {
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            swal({
                    title: 'Apakah anda setuju untuk menghapus data?',
                    text: 'Data yang telah dihapus tidak dapat dikembalikan lagi',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: 'gameparam/' + y,
                            type: "POST",
                            data: {
                                '_method': 'DELETE',
                                '_token': csrf_token
                            },
                            success: function (data) {

                            }
                        });
                    }
                });
        }
    }

</script>
@endsection
