@extends('layouts.admin.dashboard')
@section('title','Master Perilaku Anak')
@section('main-content')
<div class="section">
    <div class="section-header">
            <h1>Manajemen Aturan</h1>
    </div>
</div>
@include('layouts.flash-msg')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                    <a href="{{url('dashboard/rule/form')}}"  class="btn btn-primary ">Tambah Aturan</a> |
                    {{-- <a href="#" class="btn btn-info" onclick="actControl('import')" role="button" data-toggle="modal" data-target=".bs-modal-lg"
                        style="cursor:pointer">Import Aturan</a> --}}
                    <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Aturan</th>
                            <th scope="col">Permainan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!$rules->isEmpty())
                        @foreach ($rules as $nom => $rule)
                        <tr>
                            <td data-label="No">{{ ($rules->currentpage()-1) * $rules->perpage() + $nom + 1 }}</td>
                            <td data-label="kode">{{$rule->name}}</td>
                            <td data-label="kode">{{$rule->game->name}}</td>
                            <td data-label="Action" style="min-width:120px">
                                <a href="#" class="btn btn-info btn-sm" onclick="actControl('detail','{{$rule->id}}')" role="button" data-toggle="modal" data-target=".bs-modal-lg"
                                            style="cursor:pointer"><i class="fas fa-eye"></i></a>
                                <a href="{{route('rules.form',$rule->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete','{{$rule->id}}')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5">Maaf, data belum tersedia</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {!! $rules->render() !!}
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
            $("#data-display").load('{{url("dashboard/rules/data")}}');
        } else if (x == "form") {
            $("#form-display").load('{{url("dashboard/rule/form")}}' + "/" + (!y ? "" : y));
        } else if( x == "detail"){
            $("#modal-setup").attr("class", "modal-dialog modal-lg");
            $("#myLargeModalBody").load('{{url("dashboard/rule")}}' +"/"+ (!y ? "" : y ));
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
                            url: 'rule/' + y,
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
