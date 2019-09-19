@extends('layouts.admin.dashboard')
@section('title','Master Ingredient')
@section('main-content')
    <div class="section">
        <div class="section-header">
            <h1>Master Permainan</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div id="form-display"></div>
        </div>
        <div class="col-md-7">
            <div class="alert-container"></div>
            <div id="data-display"></div>
        </div>
    </div>
@endsection


@section('customcss')
<link rel="stylesheet" href="{{asset('vendor/bootrap-fileinput/css/fileinput.css')}}">
<link rel="stylesheet" href="{{asset('stisla/assets/modules/summernote/summernote-bs4.css')}}">

@endsection
@section('customjs')
<script src="{{asset('vendor/bootrap-fileinput/js/fileinput.js')}}"></script>
<script src="{{asset('vendor/bootrap-fileinput/themes/fas/theme.js')}}"></script>
<script src="{{asset('stisla/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('stisla/assets/modules/sweetalert/sweetalert.min.js')}}"></script>
    <script>
        actControl("form");
        actControl("data");
        function actControl(x, y, z) {
            if (x == "data") {
                $("#data-display").load('{{url("dashboard/games/data")}}');
            } else if (x == "form") {
                $("#form-display").load('{{url("dashboard/game/form")}}' +"/"+ (!y ? "" : y) );
            } else if( x == "detail"){
                $("#modal-setup").attr("class", "modal-dialog modal-lg");
                $("#myLargeModalBody").load('{{url("dashboard/game/detail")}}' +"/"+ (!y ? "" : y ));
            }else if (x == "delete") {
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
                                url: 'game/' + y,
                                type : "POST",
                                data : {'_method' : 'DELETE', '_token' : csrf_token},
                                success:function(data){
                                    swal('kategori berhasil dihapus', {
                                        icon: 'success',
                                    });
                                    actControl("data");
                                }
                            });
                        }
                    });
            }
        }
        $(document).ready(function(){
            $(document).on('click','.pagination a', function(event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            })
            function fetch_data(page){
                $.ajax({
                    url: "{{url('dashboard/games/data?page=')}}"+page,
                    success:function(data){
                        $("#data-display").html(data);
                    }
                })
            }
        });
    </script>
@endsection
