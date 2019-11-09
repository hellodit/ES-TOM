@extends('layouts.admin.dashboard')
@section('title','Master Perilaku Anak')
@section('main-content')
<div class="section">
    <div class="section-header">
            <h1>Riwayat Konsultasi</h1>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-primary alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <div class="alert-title">Berhasil</div>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Anak</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Permainan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!$histories->isEmpty())
                            @foreach ($histories as $key =>  $history)
                            <tr>
                                <td data-label="No">{{$key+1}}</td>
                                <td data-label="kode">{{$history->childname}}</td>
                                <td data-label="kode">{!!indo_date($history->created_at,true)!!}</td>
                                <td data-label="kode">{{empty($history->rule->game) ? '-': $history->rule->game->name}}</td>
                                <td data-label="kode">{!! consts($history->status)!!}</td>
                                <td data-label="Action" style="min-width:120px">
                                    <a href="{{route('dashboard.history.detail',$history->id)}}" class="btn btn-dark btn-sm  {{ ($history->status == 'failed') ? 'disabled': null }}"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete','{{$history->id}}')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center">Maaf untuk saat ini data yang anda cari belum tersedia, silahkan melakukan konsultasi melalui menu yang tersedia.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                    {!! $histories->render() !!}
            </div>
        </div>

    </div>
</div>
@endsection


@section('customjs')
<script src="{{asset('stisla/assets/modules/sweetalert/sweetalert.min.js')}}"></script>
<script>
    function actControl(x, y, z) {
        if (x == "delete") {
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
                            url: 'history/' + y,
                            type: "POST",
                            data: {
                                '_method': 'DELETE',
                                '_token': csrf_token
                            },
                            success: function () {
                                location.reload();
                            }
                        });
                    }
                });
        }else if(x == "import"){
            $("#modal-setup").attr("class", "modal-dialog modal-lg");
            $("#myLargeModalBody").load('{{url("dashboard/rule/importform")}}');
        }
    }

</script>
@endsection
